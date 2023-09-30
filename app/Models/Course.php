<?php
namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Course extends Model
{
    use HasSlug;
    use SearchableTrait;

    //
    protected $table      = 'course';
    //protected $primaryKey = 'id';
    protected $fillable = [];
    protected $guarded  = [];
    protected $hidden   = ['created_at'];

    protected $searchable = [
        'columns' => [
            'course.name'   => 100,
            'category.name' => 80,
        ],
        'joins' => [
            'category' => ['category.id','course.category_id'],
        ],
    ];

    /**
     * Get the options for generating the slug.
    */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->usingSeparator('_');
    }

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id','category_id');
    }

}

