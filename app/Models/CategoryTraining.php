<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTraining extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_category',
        'name_category',
        'created_at',
        'updated_at',
    ];

    public function training()
    {
        return $this->hasMany(Training::class, 'id_category');
    }
}
