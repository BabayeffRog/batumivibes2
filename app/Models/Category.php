<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'slug', 'type', 'icon', 'is_active'];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'is_active' => 'boolean',
    ];

    public function getTranslated($field)
    {
        $locale = app()->getLocale();
        return $this->{$field}[$locale] ?? $this->{$field}['en'] ?? '';
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }
}
