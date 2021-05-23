<?php

namespace App\Models;

use App\Http\Controllers\IrisDataController;
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

    public function checkIris($id)
    {
        $passport = new Passport();
        $iris = self::whereCitizenId($passport->getCitizen($id))->get($this->iris_data);
        if (!is_null($iris)) {
            return $this->iris_data;
        } else {
            self::insert($passport->getCitizen($id));
        }

    }
}
