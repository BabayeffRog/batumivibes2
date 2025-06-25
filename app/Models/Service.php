<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;

class Service extends Model
{
    protected $fillable = [
        'category_id',
        'type',
        'title',
        'description',
        'price',
        'slug',
        'icon',
        'is_featured',
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
