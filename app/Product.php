<?php

namespace App;

use App\Helpers\ProductSorts;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopeSort($query)
    {
        $filter = new ProductSorts;

        return $filter->apply($query);
    }

    public function getInCartAttribute()
    {
        if (request()->session()->has('cart')) {
            $cartItems = request()->session()->get('cart')->toArray();
            return in_array($this->id, $cartItems);
        }

        return false;
    }

    protected $appends = ['in_cart'];
}
