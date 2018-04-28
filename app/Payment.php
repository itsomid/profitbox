<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

/**
 * app\Payment
 *
 * @property int $id
 * @property string $via
 * @property string|null $authority
 * @property string $payment_details
 * @property int $amount
 * @property int|null $user_id
 * @property int|null $vps_id
 * @property string $status

 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $payment_info
 * @property-read \app\User|null $user

 * @mixin \Eloquent
 */

class Payment extends Model
{
    protected $fillable = ['type','payment_details','payment'];
    protected $hidden = ['id','user_id','payment_details','vps_id','authority'];
    protected $appends = ['payment_info'];

    public function user()
    {
        return $this->belongsTo('app\User');
    }

    public function vps()
    {
        return $this->belongsTo('app\Vps');
    }
    public function details()
    {
        return json_decode($this->payment_details);
    }
    public function getPaymentInfoAttribute() {
        return $this->details();
    }
    public function setDetails($details)
    {
        $this->payment_details = json_encode($details);
        $this->save();
    }
    public function setPaid()
    {
        $this->status = 'successful';
        $this->save();
        /** @var Vps $vps */
//        $vps = $this->vps;
//        $vps->status = 'pending';
//        $vps->save();
    }
}
