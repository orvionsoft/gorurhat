<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CowImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cow()
    {
        return $this->belongsTo(Cow::class, 'cow_id');
    }
}
