<?php

declare(strict_types=1);

 final class Cliente extends Usuario{
    private string $dataCadastro;
    
    
    public function __construct(string $email, string $senha, string $nome)
    {
      parent::setEmail($email);
      parent::setSenha($senha);
      parent::setName($nome);
    }
   

    public function getdataCadastro():string 
    {
       return $this -> dataCadastro; 
    } 
 
    public function setsalario($dataCadastro):void
    {
         $this->dataCadastro = $dataCadastro;
    }

    
}