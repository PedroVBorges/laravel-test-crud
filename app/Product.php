<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'qty', 'price'];

    /**
     * returns the sum of the price of all products
     * @return int total price
     */
    public function getTotalPriceAttribute() {
        return $this->qty * $this->price;
    }
}
