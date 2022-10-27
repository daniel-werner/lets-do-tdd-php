<?php

namespace Unit;

use PHPUnit\Framework\TestCase;
use App\Cart;

class CartTest extends TestCase
{
    public function testAddItemToCart()
    {
        $cart = new Cart();

        $cart->addItem('P111', 'Pizza', 1, 110000);

        $this->assertCount(1, $cart->getItems());
        $this->assertNotNull($cart);
    }

    public function testRemoveItemFromCart()
    {
        $cart = new Cart();
        $cart->addItem('P111', 'Pizza', 1, 110000);

        $cart->removeItem('P111');

        $this->assertCount(0, $cart->getItems());
    }
}
