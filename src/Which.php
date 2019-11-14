<?php

namespace App;

use App\interfaces\Persona;
use App\Grimorio;

class Which extends Grimorio implements Persona
{
    public function saludar($nameWhich)
    {
        $saludo = "Hola soy una Which" .$nameWhich;
        echo $saludo.PHP_EOL;
    }
}