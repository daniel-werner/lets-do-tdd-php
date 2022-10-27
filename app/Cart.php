<?php

namespace App;

class Cart
{
    protected array $items = [];

    public function addItem(string $code, string $name, int $quantity, int $price)
    {
        $this->items[] = [
            'code' => $code,
            'name' => $name,
            'quantity' => $quantity,
            'price' => $price
        ];
    }

    public function removeItem(string $code)
    {
        $this->items = array_filter($this->items, fn($item) => $item['code'] !== $code);
    }

    public function getTotal():int
    {
        $sum = 0;

        foreach($this->items as $item) {
            $sum += $item['price'];
        }

        return $sum;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }
}