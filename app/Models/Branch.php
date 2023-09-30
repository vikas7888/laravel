<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = "intern_branch";
    protected $fillable = ['name','slug','status'];
}
