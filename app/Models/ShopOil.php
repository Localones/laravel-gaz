<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopOil extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'cube', 'price', 'capacity', 'trk', 'valve', 'system',
    ];
}
