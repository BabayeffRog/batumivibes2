<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\TranslatableFields;

class Property extends Model
{
    use TranslatableFields;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'purpose',
        'property_type',
        'location',
        'bedrooms',
        'area',
        'price',
        'gallery',
        'is_featured',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'gallery' => 'array',
        'is_featured' => 'boolean',
    ];

    /*
     * Relationships (optional for future use)
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function destinations()
    {
        return $this->morphToMany(Destination::class, 'destinationable');
    }

    /*
     * Accessors from TranslatableFields Trait:
     * - $property->localized_title
     * - $property->localized_description
     */
}
