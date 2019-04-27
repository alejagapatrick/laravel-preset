<?php

namespace App\Models\Traits;

trait HasUniqueSlug
{
    protected static function bootHasUniqueSlug()
    {
        static::saving(function ($model) {
            $slug = str_slug(str_limit($model->name, 50, ''));

            if (isset($model->id)) {
                if (static::where([
                    ['slug', $slug],
                    ['id', '!=', $model->id],
                ])->exists()) {
                    $slug = $slug.'-'.$model->id;
                }
            } elseif (static::whereSlug($slug)->exists()) {
                $slug = $slug.'-'.str_random(10);
            }
            $model->slug = $slug;
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
