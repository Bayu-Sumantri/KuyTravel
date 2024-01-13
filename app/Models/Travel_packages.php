<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel_packages extends Model
{
    use HasFactory;

    protected $table="travel_packages";

    protected $fillable = [
        "title",
        "slug",
        "thumbnail",
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
}
