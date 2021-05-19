<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SmartGate
 *
 * @property string $smart_id
 * @property int $city_id
 * @property int $type
 * @method static \Illuminate\Database\Eloquent\Builder|SmartGate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmartGate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmartGate query()
 * @method static \Illuminate\Database\Eloquent\Builder|SmartGate whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartGate whereSmartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartGate whereType($value)
 * @mixin \Eloquent
 */
class SmartGate extends Model
{
    use HasFactory;
}
