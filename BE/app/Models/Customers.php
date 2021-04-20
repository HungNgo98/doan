<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'address',
        'email',
    ];

    public function orders()
    {
        return $this->hasMany('App\Orders');
    }
}
