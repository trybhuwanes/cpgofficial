<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_training',
        'title_training',
        'slug_training',
        'pict_training',
        'desc_training',
        'shortdesc_training',
        'date_training',
        'location_training',
        'created_at',
        'updated_at',
    ];

    public function categoryTraining()
    {
        return $this->belongsTo(CategoryTraining::class, 'id_category');
    }
}
