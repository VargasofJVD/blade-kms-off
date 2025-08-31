<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category'
    ];

    public function images()
    {
        return $this->hasMany(GalleryImage::class);
    }

    public function getCoverImageAttribute()
    {
        return $this->images()->first();
    }
}
