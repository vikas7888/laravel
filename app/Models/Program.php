<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = "intern_program";
    
    protected $fillable = ['name','slug','status','intern_id'];
    
    
    public function branch()
    {
        return $this->hasOne('App\Models\Branch','id','intern_id');
    }
    
}
