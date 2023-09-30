<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{

    protected $guarded  = [];
    protected $hidden   = ['created_at'];
    protected $casts = [
        'start_date' => 'date:Y-m-d',
    ];
    protected $fillable = [
        'order_id',
        'name',
        'phone',
        'email',
        'college',
        'branch',
        'course',
        'payment',
        'status',
        'start_date',
        'razorpay_payment_id',
        'code',
        'com_paid',
        'is_read',
    ];
    
    public function category()
    {
        return $this->hasOne('App\Models\Branch','id','branch');
    }

    public function program()
    {
        return $this->hasOne('App\Models\Program','id','course');
    }
    
    public function coupon()
    {
        return $this->hasOne('App\Models\Coupon','code','code');
    }
    

}
