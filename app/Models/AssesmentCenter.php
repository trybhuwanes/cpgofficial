<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssesmentCenter extends Model
{
    use HasFactory;

    // protected $table = 'assesment_center';
    protected $fillable = [
        'id',
        'title',
        'pict',
        'desc',
        'importance',
        'uk',
        'syarat1',
        'syarat2',
        'syarat3',
        'syarat4',
        'syarat5',
        'syarat6',
        'pictagenda',
        'created_at',
        'updated_at',
    ];
}
