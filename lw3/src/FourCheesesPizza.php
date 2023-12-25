<?php

namespace Ya\Test;

require '../vendor/autoload.php';

use Lw3\Library\Pizza;

class FourCheesesPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Четыре сыра; ';
        $this->sauce = 'масло оливковое; ';
        $this->toppings = ['моцарелла, ', 'эмменталь, ', 'горгонзола; ', 'пармезан; ', 'орегано сушеный; '];
    }
}
