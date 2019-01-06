<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeWhereSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }
}
