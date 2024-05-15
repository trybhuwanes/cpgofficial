<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csr extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title_csr',
        'slug_csr',
        'pict_csr',
        'desc_csr',
        'date_csr',
        'location_csr',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'date_csr' => 'datetime'
    ];
}
