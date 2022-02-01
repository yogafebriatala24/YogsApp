<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'location', 'about', 'cagar_budaya', 'makanan_khas', 'tarian_khas', 'tanggal_keberangkatan', 'durasi_wisata', 'tipe_trip', 'harga' 
    ];

    protected $hidden =[

    ];
}
