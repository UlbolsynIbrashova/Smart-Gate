<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Citizen;

/**
 * App\Models\Passport
 *
 * @property int $id
 * @property string $mrz
 * @property string $passport_id
 * @property string $surname
 * @property string $name
 * @property string $nation
 * @property string $gender
 * @property string $dob
 * @property string $doi
 * @property string $doe
 * @property-read Citizen|null $citizen
 * @method static \Illuminate\Database\Eloquent\Builder|Passport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Passport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Passport query()
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereDoe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereDoi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereMrz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereNation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport wherePassportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereSurname($value)
 * @mixin \Eloquent
 */
class Passport extends Model
{
    use HasFactory;

    protected $table = 'passports';

    protected $guarded = [
        'mrz'
    ];

    public function citizen()
    {
        return $this->hasOne(Citizen::class, 'passport_id', 'passport_id');
    }

    public function getCitizen($mrz)
    {
        $asd = self::whereMrz($mrz)->first()->load('citizen', 'citizen.status')->toArray();
        return $asd['citizen']['status'];
    }
}
