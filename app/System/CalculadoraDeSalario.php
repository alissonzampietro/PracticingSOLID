<?php
namespace App\System;

use App\System\Interfaces\Funcionario;

class CalculadoraDeSalario
{

    public function calcula(Funcionario $funcionario)
    {
        $salarioLiquido = $funcionario->getSalario();
        switch (strtoupper($funcionario->getCargo())){
            case "Programador":
                $salarioLiquido = $this->dezOuVintePorcento($funcionario);
                break;
            case "Segurança":
                $salarioLiquido = $this->quinzeOuVinteCincoPorcento($funcionario);
                break;
            default:
                return FALSE;
                break;
               
        }
    }
    
    private function dezOuVintePorcento(Funcionario $funcionario)
    {
        return $funcionario->getSalario() - ($funcionario->getSalario() * 0.1); 
    }
    
    private function quinzeOuVinteCincoPorcento(Funcionario $funcionario)
    {
        return $funcionario->getSalario() - ($funcionario->getSalario() * 0.25);
    }
}