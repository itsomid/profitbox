<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

/**
 * app\Vps
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\app\Payment[] $payments
 * @method static \Illuminate\Database\Eloquent\Builder|\app\Vps whereId($value)
 * @property-read \app\User|null $user
 * @mixin \Eloquent
 */

class Vps extends Model
{
    protected $fillable = ['title','bot_details','period','expire_date','monthly_price','price','status'];
    protected $hidden = ['id','user_id'];

    protected $casts = [
        'bot_details'=>'array',
    ];
    protected $primaryKey = 'id';
    protected $dates = ['expire_date'];

    public function user()
    {
        return $this->belongsTo('app\User');
    }

    public function payment()
    {
        return $this->hasOne('app\Payment')->where('status','successful');
    }
    public function allPayment()
    {
        return $this->hasMany('app\Payment');
    }
}
