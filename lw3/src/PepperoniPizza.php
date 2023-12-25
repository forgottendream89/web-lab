<?php

namespace Ya\Test;

require '../vendor/autoload.php';

use Lw3\Library\Pizza;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Пепперони; ';
        $this->sauce = 'томатный соус; ';
        $this->toppings = ['сыр, ', 'пепперони, ', 'грибы; '];
    }
}
