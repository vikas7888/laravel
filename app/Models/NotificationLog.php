<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotificationLog extends Model
{
    //
    protected $table    = 'notification_sent';
    protected $fillable = [];
    protected $guarded  = [];
    protected $hidden   = ['created_at'];
}
