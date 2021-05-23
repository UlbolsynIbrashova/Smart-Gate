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

    public function checkPassport(PassportRequest $passportRequest)
    {
        try {
            $mrz = $passportRequest->input('mrz');
            $passport = new Passport();
            return $passport->getCitizen($mrz);
        } catch (\Exception $e) {
            return ['success' => $e->getMessage()];
        }
    }
}
