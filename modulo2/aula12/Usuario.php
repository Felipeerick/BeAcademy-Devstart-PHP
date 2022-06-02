<?php

declare(strict_types=1);

abstract class Usuario{
    private string $nome;
    private string $cpf;
    private string $email;
    private string $senha;
   
    public function __construct(string $email, string $senha,)
    {
      $this->email=$email;
      $this->senha=$senha;
      
    }

    public function getEmail():string 
    {
       return $this -> email; 
    } 
 
    public function setEmail($novoEmail)
    {
         $this->email = $novoEmail;
    }

    
    public function getSenha():string 
    {
       return $this -> senha; 
    } 
 
    public function setSenha($novoSenha):void
    {
         $this->senha = $novoSenha;
    }

    public function getName():string 
    {
       return $this -> nome; 
    } 
 
    public function setName($novoNome):void{
         $this->nome = $novoNome;
    }
}