<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class images extends Model
{
    use HasFactory;

    protected $table="images";


    protected $fillable = [
        "travel_packages_id",
        "thumbnail",
    ];

    public function travel_packages(): BelongsTo
    {
        return $this->belongsTo(Travel_packages::class, 'travel_packages_id');
    }
}
