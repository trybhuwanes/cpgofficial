<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_blog',
        'title_blog',
        'slug_blog',
        'pict_blog',
        'desc_blog',
        'created_at',
        'updated_at',
    ];
}
