<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Citizen;
/**
 * App\Models\Status
 *
 * @property int $id
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereId($value)
 * @mixin \Eloquent
 */
class Status extends Model
{
    use HasFactory;
    protected $table = 'statuses';

    public function citizen() {

        return $this->hasOne(Citizen::class);

    }
}
