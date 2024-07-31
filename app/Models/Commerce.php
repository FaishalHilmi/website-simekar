<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commerce extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'title', 'description', 'contact', 'link_maps'];
    protected $casts = [
        'image' => 'array',
    ];
}
