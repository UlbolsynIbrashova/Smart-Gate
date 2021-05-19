<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Http\Requests\PassportRequest;
use App\Models\Citizen;
use App\Models\IrisData;
use App\Models\Passport;
use App\Models\Status;
use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class PassportController extends Controller
{
    public $citizenId;

    public function checkPassport(PassportRequest $passportRequest)
    {
        try {
            $mrz = $passportRequest->input('mrz');
            $asd = Passport::whereMrz($mrz)->first()->load('citizen', 'citizen.status')->toArray();
            $this->citizenId = $asd['citizen']['id'];
            dd($mrz);
            return $asd;

        } catch (\Exception $e) {
            return ['success' => $e->getMessage()];
        }
    }

    public function getPassport($name)
    {
        $text="I luv my &lt;3 iphone &amp; you're awsm apple. DisplayIsAwesome, sooo happppppy 🙂 http://www.apple.com";
        $result = shell_exec("python -");
        dd($result);
//        // $json = an encoded JSON string
//        $text = 'The text you are desperate to analyze';
//        try {
//            $process = new Process(["../../python --version"]);
//            $process->run();
//
//            if (!$process->isSuccessful()) {
//                throw new ProcessFailedException($process);
//            }
//
//            echo $process->getOutput();
//        } catch (\Exception $exception) {
//            dd($exception->getMessage());
//        }


    }
//    public function checkMrz() {
//        try {
//            $citizenIris =  IrisData::wh
//            $asd = IrisData::whe($this->citizenId)->first()->load('citizen', 'citizen.status')->toArray();
//            $this->citizenId = $asd['citizen']['id'];
//            return $asd;
//        } catch (\Exception $e) {
//            return ['success' => $e->getMessage()];
//        }
//    }



}
