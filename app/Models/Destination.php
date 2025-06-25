<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'image'];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
    ];

    public function getTranslated($field, $locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{$field}[$locale] ?? $this->{$field}['en'] ?? null;
    }

    public function properties()
    {
        return $this->morphedByMany(Property::class, 'destinationable');
    }

    public function services()
    {
        return $this->morphedByMany(Service::class, 'destinationable');
    }

    public function tours()
    {
        return $this->morphedByMany(Tour::class, 'destinationable');
    }
}
