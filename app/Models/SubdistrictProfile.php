<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SubdistrictProfile extends Model implements HasMedia
{
    use CrudTrait, HasFactory, InteractsWithMedia, HasUuid;

    protected $fillable = [
        'title',
        'content',
        'thumbnail_image',
        'menu',
        'status'
    ];

    const MENU = [
        'sejarah' => 'Sejarah',
        'luas-wilayah' => 'Luas Wilayah',
        'struktur-organisasi' => 'Struktur Organisasi',
        'tupoksi' => 'Tupoksi',
        'visi-misi' => 'Visi Misi',
    ];

    const STATUS = [
        0 => 'Tidak Aktif',
        1 => 'Aktif',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('thumbnail_image')
            ->acceptsMimeTypes(['image/png', 'image/jpeg', 'image/jpg'])
            ->singleFile();
    }

    public function thumbnailImage()
    {
        return $this->morphOne(\Spatie\MediaLibrary\MediaCollections\Models\Media::class, 'model')
            ->where('collection_name', 'thumbnail_image');
    }
}
