<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Tour extends Model implements HasMedia
{
    use CrudTrait, HasFactory, InteractsWithMedia, HasUuid;

    protected $fillable = [
        'title',
        'description',
        'tour_image'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('tour_image')
            ->acceptsMimeTypes(['image/png', 'image/jpeg', 'image/jpg'])
            ->singleFile();
    }

    public function tourImage()
    {
        return $this->morphOne(\Spatie\MediaLibrary\MediaCollections\Models\Media::class, 'model')
            ->where('collection_name', 'tour_image');
    }
}
