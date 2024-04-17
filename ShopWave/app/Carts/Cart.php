<?php

namespace App\Carts;


use Illuminate\Support\Facades\Cookie;

class Cart
{

    public function addProduct($productId): void
    {
        $currentElements = [];
        if (Cookie::has('cart')) {
            $currentElements = json_decode(Cookie::get('cart'), true);
        }

        $currentElements[] = $productId;

        Cookie::queue('cart', json_encode($currentElements));
    }

    public function removeProduct($productId): void
    {
        $currentElements = json_decode(Cookie::get('cart'), true);

        foreach ($currentElements as $key => $element) {
            if($element == $productId) {
                unset($currentElements[$key]);
            }
        }

        Cookie::queue('cart', json_encode($currentElements));
    }

    public function getContent(): array
    {
        return $this->items;
    }
}
