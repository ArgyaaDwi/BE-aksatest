<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Employee extends Model
{
    protected $fillable = ['name', 'phone', 'image', 'division_id', 'position'];

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
    protected $appends = ['image_url'];

    // public function getImageUrlAttribute()
    // {
    //     if (!$this->image) {
    //         return null;
    //     }

    //     return asset('storage/' . $this->image);
    // }
    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return null;
        }

        return asset('storage/' . $this->image);
    }
}
