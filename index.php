<?php

include 'vendor/autoload.php';

use App\Wizard;
use App\Muggle;

//ejemplo con construct
$harry = new Wizard("Maria");
$harry->DNI = 1413;
$harry->saludar();
$harry->leviosa();

//ejemplo sin construct, en este caso "Pedro" no pasaria
$hermione = new Wizard("Pedro");
$hermione->nameWizard="Hermione";
$hermione->DNI = 1450;
$hermione->saludar();
$hermione->leviosa();

$nuria = new Muggle();
$nuria->nameMuggle="Nuria";
$nuria->saludar("Hermione");

