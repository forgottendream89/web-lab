<?php

namespace Ya\Test;

require '../vendor/autoload.php';

use Lw3\Library\Pizza;

class HawaiianPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Гавайская; ';
        $this->sauce = 'соус барбекю; ';
        $this->toppings = ['моцарелла, ', 'болгарский перец, ', 'ананас; ', 'пармезан; '];
    }
}
