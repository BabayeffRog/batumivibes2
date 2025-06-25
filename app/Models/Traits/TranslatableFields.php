<?php

namespace App\Models\Traits;

trait TranslatableFields
{
    public function getLocalizedTitleAttribute()
    {
        return $this->title[app()->getLocale()] ?? $this->title['en'];
    }

    public function getLocalizedContentAttribute()
    {
        return $this->content[app()->getLocale()] ?? $this->content['en'];
    }

    public function getLocalizedSeoTitleAttribute()
    {
        return $this->seo_title[app()->getLocale()] ?? $this->seo_title['en'];
    }

    public function getLocalizedSeoDescriptionAttribute()
    {
        return $this->seo_description[app()->getLocale()] ?? $this->seo_description['en'];
    }
}
