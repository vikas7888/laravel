<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Landing extends Model
{
   
    //
    protected $table    = 'landing';
    //protected $primaryKey = 'id';
    protected $fillable = [];
    protected $guarded  = [];
    protected $hidden   = ['created_at'];

    /**
     * Get the options for generating the slug.
    */
}
