<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{

    protected $table      = 'participation';
    //protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'detail',
        'conducted',
        'location', 
        'status',
        'issued'
    ];

    protected $guarded  = [];
    protected $hidden   = ['created_at'];

    /**
     * Get the options for generating the slug.
    */
    
}
