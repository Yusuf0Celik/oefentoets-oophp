<?php

class Drink
{
    private $name;
    private $category;
    private $age;
    private $price;

    public function __construct(string $name, string $category, int $age, float $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->age = $age;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}