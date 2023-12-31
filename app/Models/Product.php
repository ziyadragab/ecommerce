<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Category;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory,HasSlug;
    const PATH='Images/product';
    protected $fillable=[
        'name', 'slug', 'image', 'description', 'price','category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_size', 'product_id', 'size_id');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class , 'product_color');
    }
    public function getImageAttribute($value){
        return $this::PATH.DIRECTORY_SEPARATOR.$value;
     }
/**
* @return SlugOptions
*/
    public function getSlugOptions(): SlugOptions
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
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

}
