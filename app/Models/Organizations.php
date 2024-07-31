<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizations extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'position', 'image'];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($news) {
    //         if (empty($news->image)) {
    //             $news->image = 'public/images/hero-mekar.png'; // Ganti dengan path gambar default Anda
    //         }
    //     });

    //     static::updating(function ($news) {
    //         if (empty($news->image)) {
    //             $news->image = 'public/images/hero-mekar.png'; // Ganti dengan path gambar default Anda
    //         }
    //     });
    // }
}
