<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Skill extends Model
{
    protected $fillable = ['name', 'icon', 'slug'];
    use HasFactory;
    use Sluggable;



    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function getIconAttribute($value)
    {
        return asset("storage/$value");
    }
}
