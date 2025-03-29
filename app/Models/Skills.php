<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skills extends Model
{
    use HasFactory;
    protected $table = 'skills';
    protected $fillable = ['name'];
    protected static function booted()
    {
        static::creating(function ($skill) {
            $skill->id = Uuid::uuid7()->toString();
        });
    }
}
