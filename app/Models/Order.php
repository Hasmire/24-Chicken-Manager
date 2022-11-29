<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user() {
        return $this->hasOne(User::class);
    }

    public function quantity() {
        return $this->hasOne(Quantity::class);
    }

    public function order_type() {
        return $this->hasOne(Order_type::class);
    }
}
