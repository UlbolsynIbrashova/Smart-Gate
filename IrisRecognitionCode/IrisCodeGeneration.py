import math
import numpy as np
import cv2
from PIL import Image
from skimage.filters.rank import equalize
from skimage.morphology import disk
from skimage.transform import hough_circle, hough_circle_peaks
import pandas as pd
import sys
def IrisLocalization(eye):
    blured = cv2.bilateralFilter(eye, 9, 100, 100)
    Xp = blured.sum(axis=0).argmin()
    Yp = blured.sum(axis=1).argmin()
    x = blured[max(Yp - 120, 0):min(Yp + 120, 480), max(Xp - 120, 0):min(Xp + 120, 640)].sum(axis=0).argmin()
    y = blured[max(Yp - 120, 0):min(Yp + 120, 480), max(Xp - 120, 0):min(Xp + 120, 640)].sum(axis=1).argmin()
    Xp = max(Xp - 120, 0) + x
    Yp = max(Yp - 120, 0) + y
    if Xp >= 200 and Yp >= 160:
        blur = cv2.GaussianBlur(eye[Yp - 120:Yp + 120, Xp - 120:Xp + 120], (5, 5), 0)
        pupil_circles = cv2.HoughCircles(blur, cv2.HOUGH_GRADIENT, dp=1.2, minDist=200, param1=210, param2=12,
                                         minRadius=10, maxRadius=80)
        xp, yp, rp = np.round(pupil_circles[0][0]).astype("int")
        xp = Xp - 120 + xp
        yp = Yp - 120 + yp
    else:
        pupil_circles = cv2.HoughCircles(blured, cv2.HOUGH_GRADIENT, 4, 200, minRadius=25, maxRadius=80, param2=25)
        xp, yp, rp = np.round(pupil_circles[0][0]).astype("int")
    eye_copy = eye.copy()
    rp = rp + 7  # slightly enlarge the pupil radius makes a better result
    blured_copy = cv2.medianBlur(eye_copy, 11)
    blured_copy = cv2.medianBlur(blured_copy, 11)
    blured_copy = cv2.medianBlur(blured_copy, 11)
    eye_edges = cv2.Canny(blured_copy, threshold1=15, threshold2=30, L2gradient=True)
    eye_edges[:, xp - rp - 60:xp + rp + 60] = 0

    hough_radii = np.arange(rp + 45, 300, 2)
    hough_res = hough_circle(eye_edges, hough_radii)
    accums, xi, yi, ri = hough_circle_peaks(hough_res, hough_radii, total_num_peaks=1)
    iris = []
    iris.extend(xi)
    iris.extend(yi)
    iris.extend(ri)
    if ((iris[0] - xp) ** 2 + (iris[1] - yp) ** 2) ** 0.5 > rp * 0.3:
        iris[0] = xp
        iris[1] = yp
    #cv2.imshow('blur',blured)
    cv2.circle(blured,(iris[0],iris[1]),iris[2],(0,0,255),1)

    cv2.circle(blured, (xp, yp), rp, (0, 255,0 ), 1)
    #cv2.imshow('circle1',blured)
    #cv2.imshow('circle2',blured)
    #cv2.waitKey(0)
    return np.array(iris), np.array([xp, yp, rp])


def IrisNormalization(image, inner_circle, outer_circle):
    localized_img = image
    row = 64
    col = 512
    normalized_iris = np.zeros(shape=(64, 512))
    inner_y = inner_circle[0]  # height
    inner_x = inner_circle[1]  # width
    outer_y = outer_circle[0]
    outer_x = outer_circle[1]
    angle = 2.0 * math.pi / col
    inner_boundary_x = np.zeros(shape=(1, col))
    inner_boundary_y = np.zeros(shape=(1, col))
    outer_boundary_x = np.zeros(shape=(1, col))
    outer_boundary_y = np.zeros(shape=(1, col))
    for j in range(col):
        inner_boundary_x[0][j] = inner_circle[0] + inner_circle[2] * math.cos(angle * (j))
        inner_boundary_y[0][j] = inner_circle[1] + inner_circle[2] * math.sin(angle * (j))

        outer_boundary_x[0][j] = outer_circle[0] + outer_circle[2] * math.cos(angle * (j))
        outer_boundary_y[0][j] = outer_circle[1] + outer_circle[2] * math.sin(angle * (j))

    for j in range(512):
        for i in range(64):
            normalized_iris[i][j] = localized_img[min(int(int(inner_boundary_y[0][j])
                                                          + (int(outer_boundary_y[0][j]) - int(
                inner_boundary_y[0][j])) * (i / 64.0)), localized_img.shape[0] - 1)][min(int(int(inner_boundary_x[0][j])
                                                                                             + (int(
                outer_boundary_x[0][j]) - int(inner_boundary_x[0][j]))
                                                                                             * (i / 64.0)),
                                                                                         localized_img.shape[1] - 1)]

    res_image = 255 - normalized_iris
    normalized_iriss = res_image.astype(np.uint8)
    #cv2.imshow('norm',normalized_iriss)
    #cv2.waitKey(0)
    return res_image
    

def MatrixToImage(data):
    data = data*255
    new_im = Image.fromarray(data.astype(np.uint8))
    #cv2.imshow('circle2',new_im)
    #cv2.waitKey(0)
    return new_im

def ImageEnhancement(normalized_iris):
    row = 64
    col = 512
    normalized_iris = normalized_iris.astype(np.uint8)

    enhanced_image = normalized_iris

    enhanced_image = equalize(enhanced_image, disk(32))

    roi = enhanced_image[0:48, :]
    
    #cv2.imshow('enh',roi)
    #cv2.waitKey(0)
    return roi
def FeatureExtraction(img):
    ret,th1 = cv2.threshold(img,127,255,cv2.THRESH_BINARY)
    th2 = cv2.adaptiveThreshold(img,255,cv2.ADAPTIVE_THRESH_MEAN_C,\
            cv2.THRESH_BINARY,11,2)
    th3 = cv2.adaptiveThreshold(img,255,cv2.ADAPTIVE_THRESH_GAUSSIAN_C,\
            cv2.THRESH_BINARY,11,2)

    #cv2.imshow('featext',th3)
    #cv2.waitKey(0)
    return th1
def IrisCode(img):
    w, h = 512, 64
   
    #h, w, c = img.shape
    mean = img.mean()

    blank = np.zeros((h, w, 3), np.uint8)
    pixels=[]
    iris=[]
    arr=[]
    n = 16
    last = 0
    for i in range(n+1):
        w1 = w//n * (i+1)

        sub_img = img[:, last:w1]
        avg_color = cv2.mean(sub_img)
        blank[:, last:w1] = avg_color[:3]
        last = w1
        pixels.append(avg_color[:1])
        

    #print(pixels)
    for sub in pixels:
        if sub >= mean:
            iris.append("1")
        else:
            iris.append("0")
    striris="".join(iris)
    print(striris)
            

    #cv2.imshow('opencv',blank[:,:])
    #cv2.waitKey(0)

    
if __name__=="__main__":
        path = sys.argv[1]
        img = cv2.imread(path,0)
        a1, b1 = IrisLocalization(img)
        normalizeddd=IrisNormalization(img, a1, b1)
        enh=ImageEnhancement(normalizeddd)
        feat=FeatureExtraction(enh)
        iriscodee=IrisCode(enh)
        
