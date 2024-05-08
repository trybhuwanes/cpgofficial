<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ukAssesment extends Model
{
    use HasFactory;

    protected $table = 'uk_assesment';

    protected $fillable = [
        'uk',
        'assesment_center_id',
        'created_at',
        'updated_at',
    ];

    public function assesmentCenter() {
        return $this->belongsTo(AssesmentCenter::class);
    }
}
