<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cow extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function images()
    {
        return $this->hasMany(CowImage::class, 'cow_id');
    }

    public function image()
    {
        return $this->hasOne(CowImage::class, 'cow_id')->latest();
    }
}
