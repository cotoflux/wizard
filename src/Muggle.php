<?php

namespace App;

use App\interfaces\Persona;

class Muggle implements Persona {

    public $nameMuggle;
    public function saludar()
    {
        $saludo = "Hola soy un Muggle";
        echo $saludo.PHP_EOL;
    }
}