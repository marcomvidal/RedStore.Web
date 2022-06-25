<?php

namespace App\Models;

use Akaunting\Money\Money;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'sku',
        'description',
        'picture',
        'price'
    ];

    public function getCurrencyPrice()
    {
        return Money::USD($this->price);
    }

    public function getPicturePath()
    {
        return "/pictures/{$this->picture}";
    }
}
