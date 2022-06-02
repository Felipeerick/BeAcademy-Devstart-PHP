<?php

declare(strict_types=1);

class Produto{
    private string $nome;
    private float $valor;

    public function __construct(string $novoNome, float $novoValor){
       $this -> nome = $novoNome;
       $this -> valor = $novoValor;

       if($novoValor < 0){
         die("Ops, o valor não pode ser negativo");
      };
      }

    //métodos
   public function getName():string 
   {
      return $this -> nome; 
   } 

   public function setName($novoNome){
        $this->nome = $novoNome;
   }

    public function setValue(int $novoValor): void
    {
        if($novoValor < 0){
           die("Ops, o valor não pode ser negativo");
        };

        $this->valor = $novoValor;
    }

    public function getValue():float{
         return $this -> valor;
    }
};