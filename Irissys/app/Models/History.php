<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\History
 *
 * @property string $smart_id
 * @property int $citizen_id
 * @property string $action
 * @property string $time
 * @method static \Illuminate\Database\Eloquent\Builder|History newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|History newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|History query()
 * @method static \Illuminate\Database\Eloquent\Builder|History whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereCitizenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereSmartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereTime($value)
 * @mixin \Eloquent
 */
class History extends Model
{
    use HasFactory;
}
