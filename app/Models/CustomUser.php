<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\hash;



class CustomUser extends Model
{
    use HasFactory;

    protected $table = 'user';

    // Mutators : Password
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);

        //$this->attributes['password']=password_hash($password,PASSWORD_BCRYPT);
    }
}
