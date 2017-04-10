<?php

use App\System\CalculadoraDeSalario;
use App\System\Funcionario;

$calc = new CalculadoraDeSalario();
$func = new Funcionario();

$func->setcargo("Programador");
$func->setSalario(3000);

$calc->calcula($func);