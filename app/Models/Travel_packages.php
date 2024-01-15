<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Travel_packages extends Model
{
    use HasFactory;

    protected $table="travel_packages";

    protected $fillable = [
        "title",
        "slug",
        "location",
        "about",
        "featured_event",
        "language",
        "foods",
        "departure_date",
        "duration",
        "type",
        "price",
    ];

    public function images(): HasMany
    {
        return $this->hasMany(images::class, 'travel_packages_id');
    }
}
