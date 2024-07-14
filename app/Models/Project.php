<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title' , 'project_image' , 'details' , 'description'];

    public function getProjectImageAttribute($value)
    {
        return asset("storage/$value");
    }

    use HasFactory;
}
