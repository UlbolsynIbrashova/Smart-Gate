import sys
str1=sys.argv[1]
str2=sys.argv[2]
def hammingDist(str1, str2):
    i = 0
    count = 0
 
    while(i < len(str1)):
        if(str1[i] != str2[i]):
            count += 1
        i += 1
    return count
def HD(hamd):
    ress=(1/16)*hamd
    if ress<= 0.32:
        print("match")
    else:
        print("not matched")

if __name__=="__main__":
     hamd=hammingDist(str1,str2)
     hd=HD(hamd)
