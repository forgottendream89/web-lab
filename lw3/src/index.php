<?php
require '../vendor/autoload.php';

use Ya\Test\TwoPizzaStore;
use Ya\Test\OnePizzaStore;

$pizzaStore = new OnePizzaStore();
$pizza = new TwoPizzaStore();

$pizzaStore->orderPizza('margarita');
$pizza->orderPizza('hawaiian');
