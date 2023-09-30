<?php
namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    
    //
    protected $table      = 'inquiries';
    //protected $primaryKey = 'id';
    protected $fillable = [];
    protected $guarded  = [];
    protected $hidden   = ['created_at'];

    /**
     * Get the options for generating the slug.
    */

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id','category_id');
    }
}

