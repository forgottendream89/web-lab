<?php

namespace Ya\Test;

require '../vendor/autoload.php';

use Lw3\Library\Pizza;
use Lw3\Library\PizzaStore;

class TwoPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        if ($type === 'hawaiian') {
            return new HawaiianPizza();
        }
        if ($type === 'fourcheeses') {
            return new FourCheesesPizza();
        } else {
            throw new Exception('Неверный тип пиццы.');
        }
    }
}
