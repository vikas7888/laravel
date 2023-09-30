<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{

    protected $guarded  = [];
    protected $hidden   = ['created_at'];

    protected $fillable = [
        'code',
        'value',
        'commision',
        'name',
        'company',
        'phone',
        'email',
        'type',
        'status',
    ];
    
//     public function category()
//     {
//         return $this->hasOne('App\Models\Branch','id','branch');
//     }

}
