<?php

class ValidarUsa implements Validar{

  public function ValidarDocumento(string $cpf):void{
     
      if(strlen($cpf) != 14){
         die("ops, algo errado!");
     }
  }

}