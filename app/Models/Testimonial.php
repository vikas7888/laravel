<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

    protected $table      = 'testimonial';
    //protected $primaryKey = 'id';
    protected $fillable = [];
    protected $guarded  = [];
    protected $hidden   = ['created_at'];

    /**
     * Get the options for generating the slug.
    */
}
