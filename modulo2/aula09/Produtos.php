<?php

declare(strict_types=1);

class Produto{
    private string $nome;
    private float $valor;
    private Categoria $categoria;

     public function __construct(string $novoNome, float $novoValor, Categoria $categoria){
    
          $this->nome= $novoNome;
          $this->valor= $novoValor; 
          $this->categoria=$categoria;
     }  


    //métodos
   public function getName():string 
   {
      return $this -> nome; 
   } 

   public function setName($novoNome):void{
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


    public function getDesc(): string{
       return $this-> description ;                      
    }
   
    public function setDesc(string $novaDescricao):void{
        $this->description = $novaDescricao;
    } 
};