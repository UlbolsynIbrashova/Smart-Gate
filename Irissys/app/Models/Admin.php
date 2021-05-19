<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin
 *
 * @property int $citizen_id
 * @property string $smart_id
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCitizenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereSmartId($value)
 * @mixin \Eloquent
 */
class Admin extends Model
{
    use HasFactory;
}
