<?php

class ValidarBr implements Validar{

  public function ValidarDocumento(string $cpf):void{
     
      if(strlen($cpf) != 11){
         die("ops, algo errado!");
     }
  }
}