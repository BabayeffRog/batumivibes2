<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'slug'];

    protected $casts = [
        'name' => 'array',
    ];

    public function getTranslated($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->name[$locale] ?? $this->name['en'] ?? null;
    }

    public function properties()
    {
        return $this->morphedByMany(Property::class, 'taggable');
    }

    public function services()
    {
        return $this->morphedByMany(Service::class, 'taggable');
    }

    public function tours()
    {
        return $this->morphedByMany(Tour::class, 'taggable');
    }

    public function blogs()
    {
        return $this->morphedByMany(Blog::class, 'taggable');
    }
}
