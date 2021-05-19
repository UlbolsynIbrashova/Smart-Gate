<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mockery\Generator\StringManipulation\Pass\Pass;
use App\Models\Passport;
use App\Models\Status;

/**
 * App\Models\Citizen
 *
 * @property int $id
 * @property string $passport_id
 * @property int $status
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen query()
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen wherePassportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereStatus($value)
 * @mixin \Eloquent
 */
class Citizen extends Model
{
    use HasFactory;

    public function passport() {

        return $this->belongsTo(Passport::class);
    }

    public function status() {

        return $this->belongsTo(Status::class, 'status','id');

    }

}
