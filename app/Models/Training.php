<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{

    protected $table      = 'training';
    protected $primaryKey = 'id';
    protected $fillable = [];
    protected $guarded  = [];
    protected $hidden   = ['created_at'];

    /**
     * Get the options for generating the slug.
    */
}
