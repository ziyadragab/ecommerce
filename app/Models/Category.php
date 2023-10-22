<?php

namespace App\Models;

use App\Models\Product;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory,HasSlug;

    const PATH='Images/category';

    protected $fillable=['name','slug','image'];
    public function getImageAttribute($value){
       return $this::PATH.DIRECTORY_SEPARATOR.$value;
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}


