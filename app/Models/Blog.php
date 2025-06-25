<?php

namespace App\Models;

use App\Models\Traits\TranslatableFields;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model

{
    use TranslatableFields;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'published_at',
        'seo_title',
        'seo_description',
        'image',
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
        'seo_title' => 'array',
        'seo_description' => 'array',
        'image' => 'array',
    ];

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
