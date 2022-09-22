<?php
include 'AbstractWinkelwagen.php';
include 'Winkelwagen.php';
include 'Food.php';
include 'Drink.php';

$food1 = new Food('Strawberry Donut', 'Donut', 2.99);
$food2 = new Food('Croissant', 'Bread', 2.99);
$drink1 = new Drink('Fanta', 'Frisdrank', 1, 1.49);
$drink2 = new Drink('RedBull', 'Energy Drink', 4, 1.49);

$shoppingcart = new Winkelwagen('Jumbo', 10, 'Red');
$shoppingcart->addFood($food1);
$shoppingcart->addFood($food2);
$shoppingcart->addDrinks($drink1);
$shoppingcart->addDrinks($drink2);
$shoppingcart->printProducts();