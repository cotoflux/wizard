<?php

namespace App;

use App\interfaces\Persona;
use App\Grimorio;

class Wizard extends Grimorio implements Persona
{
    public $nameWizard;
    public $DNI;

    public function __construct($nameGeneral)
    {
        $this->nameWizard=$nameGeneral;
    
    }

    public function saludar()
    {
        $saludo = "Hola soy un Wizard y me llamo ";
        echo $saludo.$this->nameWizard." ".$this->DNI.PHP_EOL ;
    }


}