<?php

namespace app;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * app\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\app\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\app\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\app\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\app\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\app\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\app\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\app\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function vps()
    {
        return $this->hasMany('app\Vps');
    }

    public function payment()
    {
        return $this->hasMany('app\Payment');
    }
}
