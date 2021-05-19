<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\AddNewColumnsToPassport
 *
 * @method static \Illuminate\Database\Eloquent\Builder|AddNewColumnsToPassport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AddNewColumnsToPassport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AddNewColumnsToPassport query()
 */
	class AddNewColumnsToPassport extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property string $mrz
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereMrz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Citizen
 *
 * @property int $id
 * @property int $user_id
 * @property int $location_in
 * @property int $location_out
 * @property string $mrz
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen query()
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereLocationIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereLocationOut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereMrz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereUserId($value)
 */
	class Citizen extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CitizenStatus
 *
 * @property int $status_code
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenStatus whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenStatus whereStatusCode($value)
 */
	class CitizenStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employee
 *
 * @property int $id
 * @property int $admin_id
 * @property string $mrz
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereMrz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 */
	class Employee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IrisData
 *
 * @property int $citizen_id
 * @property string $mrz
 * @property mixed $iris_key
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|IrisData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IrisData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IrisData query()
 * @method static \Illuminate\Database\Eloquent\Builder|IrisData whereCitizenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IrisData whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IrisData whereIrisKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IrisData whereMrz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IrisData whereUpdatedAt($value)
 */
	class IrisData extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Location
 *
 * @property int $id
 * @property string $city
 * @method static \Illuminate\Database\Eloquent\Builder|Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location query()
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereId($value)
 */
	class Location extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Passport
 *
 * @property int $id
 * @property string $mrz
 * @property int $passport_id
 * @property string $surname
 * @property string $name
 * @property string $nation
 * @property string $gender
 * @property string $dob
 * @property string $doi
 * @property string $doe
 * @property int $status
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
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereSurname($value)
 */
	class Passport extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

