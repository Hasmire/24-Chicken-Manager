<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function order_type()
    {
        return $this->hasMany(Order_type::class);
    }

    public function promo()
    {
        return $this->hasMany(Promo::class);
    }
}
