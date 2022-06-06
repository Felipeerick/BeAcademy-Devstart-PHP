<?php

declare(strict_types=1);

final class Validar{
    public static function validarCPF(string $cpf):void{
        
        if(strlen($cpf) !=11){
          die("ops, cpf inválido");
        }
    }
}