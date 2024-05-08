<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMKMStory extends Model
{
    use HasFactory;

    protected $table = 'umkm_story';

    protected $fillable = [
        'id_story',
        'title_story',
        'slug_story',
        'pict_story',
        'body_story',
        'created_at',
        'updated_at',
    ];
}
