<?php

namespace Ya\Test;

require '../vendor/autoload.php';

use Lw3\Library\Pizza;

class MargaritaPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Маргарита; ';
        $this->sauce = 'томатный соус 100-130 г; ';
        $this->toppings = ['моцарелла, ', 'оливковое масло, ', 'помидоры; ', 'базилик; '];
    }
}
