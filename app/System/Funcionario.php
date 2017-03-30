<?php

namespace App\System;

use App\System\Interfaces\Funcionario;

class Funcionario implements Funcionario
{
    private $salario;
    
    private $cargo;
    
    public function getCargo()
    {
        return $this->cargo;
    }
    
    public function setcargo($cargo)
    {
        $this->cargo = $cargo;
    }
    
    public function getSalario()
    {
        return $this->salario;
    }
    
    public function setSalario($salario)
    {
        $this->salario = $salario;   
    }
}