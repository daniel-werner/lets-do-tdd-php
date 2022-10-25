<?php

namespace Unit;

use PHPUnit\Framework\TestCase;
use App\Cart;

class CartTest extends TestCase
{
    public function testAddItemToCart()
    {
        $cart = new Cart();

        $this->assertNotNull($cart);
    }
}
