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
        'slug',
        'pict',
        'desc',
        'importance',
        'pictagenda',
        'created_at',
        'updated_at',
    ];

    public function syaratAssesment() {
        return $this->hasMany(SyaratAssesment::class);
    }

    public function ukAssesment() {
        return $this->hasMany(UkAssesment::class);
    }
}
