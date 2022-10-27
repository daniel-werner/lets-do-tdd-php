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
        foreach ($this->items as $index => $item)
        {
            if ($item['code'] === $code){
                unset($this->items[$index]);
            }
        }
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }
}