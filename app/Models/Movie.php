<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Accessors : getters
    public function getTitleAttribute($title)
    {
        return strtoupper($title);
    }

    public function getInfoAttribute()
    {
        //return "{$this->title} / {$this->date_of_release}";
        return $this->attributes['title'] . " / {$this->date_of_release}";
    }

    // Mutators : Setters
    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = strtolower($title);
    }
}
