<?php

require_once './CoffeeD.php';
require_once './Coffee.php';
require_once './AddMilk.php';
require_once './AddCinnamon.php';
require_once './CoffeeDiscount.php';

$black_coffee = new \Coffee();
echo "Black coffee costs: EUR". $black_coffee->getCost(). "\n";

$milk_coffee = new AddMilk(
    $black_coffee
);
echo "Coffee with milk costs: EUR". $milk_coffee->getCost(). "\n";

$cinnamon_milk_coffee = new AddCinnamon(
    new AddMilk(
        new Coffee()
    )
);
echo "Coffee with milk & cinnamon costs: EUR". $cinnamon_milk_coffee->getCost(). "\n";

$discount_black = new CoffeeDiscount(
    $black_coffee
);
echo "Black coffee discounted costs: EUR". $discount_black->getCost(). "\n";

$my_coffee = new AddMilk(
    new CoffeeDiscount(
        new AddCinnamon(
          new Coffee()
        )
    )
);
echo "Discounted cinnamon coffee with added milk costs: EUR". $my_coffee->getCost(). "\n";
