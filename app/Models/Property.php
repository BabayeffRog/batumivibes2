<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title', 'description', 'slug', 'location',
        'bedrooms', 'area', 'type', 'price', 'gallery', 'is_featured'
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'gallery' => 'array',
        'is_featured' => 'boolean',
    ];

    public function getTranslated($field)
    {
        $locale = app()->getLocale();
        return $this->{$field}[$locale] ?? $this->{$field}['en'] ?? '';
    }

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
//    public function getImageUrlAttribute()
//    {
//        return isset($this->gallery[0])
//            ? asset('storage/property-gallery/' . $this->gallery[0])
//            : asset('assets/images/placeholder.jpg');
//    }
}

