<?php

class Winkelwagen extends AbstractWinkelwagen
{
    private $color;

    public function __construct(string $store, int $maxProducts, string $color)
    {
        parent::__construct($store, $maxProducts);
        $this->color = $color;
        $this->drinks = [];
        $this->food = [];
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function addFood(Food $food)
    {
        $this->food[] = $food;
    }

    public function addDrinks(Drink $drink)
    {
        $this->drinks[] = $drink;
    }

    public function printProducts()
    {
        echo '<h1>Food</h1>';
        foreach ($this->food as $food) {
            echo $food->getName() . ' - ' . $food->getCategory() . ' - ' . $food->getPrice() . "<br>";
        }

        echo '<h1>Drinks</h1>';
        foreach ($this->drinks as $drink) {
            echo $drink->getName() . ' - ' . $drink->getCategory() . ' - ' . $drink->getAge() . ' - ' . $drink->getPrice() . "<br>";
        }

        echo "<br>" . $this->getNumberOfProducts();
    }

    public function getNumberOfProducts()
    {
        return "Totaal aantal producten: " . count($this->drinks) + count($this->food);
    }
}