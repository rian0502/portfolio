<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Certifications extends Model
{
    use HasFactory;
    protected $table = 'certifications';
    protected $fillable = ['title', 'image', 'description'];

    protected static function booted()
    {
        static::creating(function ($certification) {
            $certification->id = Uuid::uuid7()->toString();
        });
        
    }
}
