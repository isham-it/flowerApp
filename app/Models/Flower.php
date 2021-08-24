<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use HasFactory;

    // Tell Laravel Im not using the timestamp
    //public $timestamps = true;

    protected $fillable = ['name', 'price'];

    // Inner join :
    public function comments()
    {
    return $this->hasMany(Comment::class);
    }

    // Accessors : getters
    //public function getPriceAttribute($price)
    //{
        //return $this->attributes['price'] . " € ";
   // }

    public function getPriceFormattedAttribute($price)
    {
        return $this->attributes['price'] . " € ";
    }


    public function getUpdatedAtAttribute()
    {
        $timestamp = strtotime($this->attributes['updated_at']);
        return date('d M Y', $timestamp);
    }






}
