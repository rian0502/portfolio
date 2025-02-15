<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projects extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = ['title', 'description', 'technologies', 'link'];

    protected static function booted()
    {
        static::creating(function ($project) {
            $project->id = Uuid::uuid7()->toString();
        });
        
    }
}
