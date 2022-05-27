<?php

namespace App\Models;

use Akaunting\Money\Money;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getCurrencyPrice()
    {
        return Money::BRL($this->price);
    }

    public function getPicturePath()
    {
        return "/pictures/{$this->picture}";
    }
}
