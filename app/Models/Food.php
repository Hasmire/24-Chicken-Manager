<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    public $table = 'foods';

    protected $fillable = [
        'name',
        'description',
        'amount',
        'thumbnail'
    ];

    public function quantity()
    {
        return $this->belongsToMany(Quantity::class);
    }
}
