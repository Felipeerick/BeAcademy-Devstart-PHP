<?php

declare(strict_types=1);

class Gestor extends Usuario{
    private readonly float $salario;
    private string $horario;

    public function __construct(string $email,string $senha,float $salario)
    {
        /*acessando de forma publica*/
       //parent::$email=$email;
      // parent::$senha=$senha; 
       parent::setEmail($email);
       parent::setSenha($senha);
       $this->salario=$salario;
    }


    public function getsalario():float
    {
       return $this -> salario; 
    } 
 
    public function setsalario($novoSalario):void
    {
         $this->salario = $novoSalario;
    }

    public function gethorario():string 
    {
       return $this -> horario; 
    } 
 
    public function sethorario($novoHorario):void
    {
         $this->horario = $novoHorario;
    }
}