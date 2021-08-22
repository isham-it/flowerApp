<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use HasFactory;

    // Tell Laravel Im not using the timestamp
    public $timestamps = false;

    // Inner join :
    public function comments()
    {
    return $this->hasMany(Comment::class);
    }

    // Accessors : getters
    public function getPriceAttribute($price)
    {
        return $this->attributes['price'] . " € ";
    }


    public function getDateValue()
    {
        return date('m/d/Y', strtotime($this->attributes['date']));
    }






}
