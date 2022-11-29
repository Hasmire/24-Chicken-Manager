<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quantity extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function food()
    {
        return $this->hasMany(Food::class);
    }

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

}
