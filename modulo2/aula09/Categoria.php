<?php

declare(strict_types=1);


class Categoria{

    /*Versão no php 8.0*/
   /*  public function __construct( 
        private string $name,
        private string $descricao
    ){} */


    /* * Versões antigas* */
    private readonly string $name;
    private readonly string $descricao;

    public function __construct(string $name, string $descricao)
    {
         $this-> name=$name;
         $this-> descricao = $descricao;
    }

    public function getName():string 
    {
        return $this->name;
    }

    public function setName(string $nome): void
    {
       $this->name = $nome;
    }

    public function getDesc():string
    {
      return  $this->descricao;
    }

    public function setDesc(string $descricao): void
    {
        $this-> descricao= $descricao;
    }
};