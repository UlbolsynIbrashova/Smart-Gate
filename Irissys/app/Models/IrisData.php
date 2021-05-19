<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\IrisData
 *
 * @property int $citizen_id
 * @property string $iris_data
 * @method static \Illuminate\Database\Eloquent\Builder|IrisData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IrisData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IrisData query()
 * @method static \Illuminate\Database\Eloquent\Builder|IrisData whereCitizenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IrisData whereIrisData($value)
 * @mixin \Eloquent
 */
class IrisData extends Model
{
    use HasFactory;
}
