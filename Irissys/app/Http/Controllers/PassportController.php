<?php


namespace App\Http\Controllers\Home;


use App\Models\Passport;
use PhpParser\Node\Expr\Cast\Object_;

class PassportController
{
    public function getPassport($name)
    {
        try {
            $command = escapeshellcmd('/usr/bin/python /var/www/html/main.py --image /var/www/html/' . $name .'.jpg');
            $mrz = shell_exec($command);
            $passport = new Passport();
            return $passport->getCitizen($mrz);
        } catch (\Exception $e) {
            return ['success' => $e->getMessage()];
        }


    }
}