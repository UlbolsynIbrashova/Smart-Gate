<?php

namespace App\Http\Controllers;

use App\Models\IrisData;
use Illuminate\Http\Request;

class IrisDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array|string
     */
    public function getIris($name) {
        try {
            $irisbin = escapeshellcmd('/usr/bin/python /var/www/html/IrisCodeGeneration.py /var/www/html/' . $name .'.tiff');
            return shell_exec($irisbin);
        } catch (\Exception $e) {
            return ['success' => $e->getMessage()];
        }
    }

    public function compareIris($currentData,$irisDb)
    {
        try {
            $result = escapeshellcmd('/usr/bin/python /var/www/html/Matching.py /var/www/html/' . $currentData. $irisDb);
            return shell_exec($result);
        } catch (\Exception $e) {
            return ['success' => $e->getMessage()];
        }
    }


}
