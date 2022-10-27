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
        return array_reduce($this->items, fn($sum, $item) => $sum += $item['price'], 0 );
    }

    public function getItemCount(): int
    {
        return count($this->items);
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }
}