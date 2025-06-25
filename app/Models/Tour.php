<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'slug',
        'price',
        'start_date',
        'duration',
        'is_featured',
        'image',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
    ];

    public function getTranslated($field, $locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{$field}[$locale] ?? $this->{$field}['en'] ?? null;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function destinations()
    {
        return $this->morphToMany(Destination::class, 'destinationable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
