<?php

namespace Ya\Test;

require '../vendor/autoload.php';

use Lw3\Library\PizzaStore;
use Lw3\Library\Pizza;

class OnePizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        if ($type === 'pepperoni') {
            return new PepperoniPizza();
        }
        if ($type === 'margarita') {
            return new MargaritaPizza();
        } else {
            throw new Exception('Неверный тип пиццы.');
        }
    }
}
