<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SyaratAssesment extends Model
{
    use HasFactory;

    protected $table = 'syarat_assesment';

    protected $fillable = [
        'id',
        'syarat',
        'assesment_center_id',
        'created_at',
        'updated_at',
    ];

    public function assesmentCenter() {
        return $this->belongsTo(AssesmentCenter::class);
    }
}
