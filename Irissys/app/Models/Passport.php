<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Citizen;

class Passport extends Model
{
    use HasFactory;

    protected $table = 'passports';

    protected $guarded = [
        'mrz'
    ];

    public function citizen() {

        return $this->hasOne(Citizen::class, 'passport_id', 'passport_id');

    }
//    public function status() {
//
//        return $this->belongsTo(Status::class,'','');
//    }
}
