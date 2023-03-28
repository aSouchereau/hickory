<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;

    /**
     * Defines relationship between locations and photos
     * @return HasMany
     */
    public function photos() : HasMany {
        return $this->hasMany(Photo::class);
    }
}
