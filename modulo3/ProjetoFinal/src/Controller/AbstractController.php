<?php

declare(strict_types=1);

namespace App\Controller;

  abstract class AbstractController{
      public function renderIndex(string $IndexName):void
      {
        include ("../src/View/index/{$IndexName}.php");
      }

      public function renderProduct(string $ProductName):void
      {
        include("../src/View/product/{$ProductName}.php");
      }

      //se colocar o parametro = null, o parametro se torna opcional
      public function renderCategory(string $Categoryname, $result = null):void
      {
        include ("../src/View/Category/{$Categoryname}.php");
      }

      public function renderErro(string $error){
        include "../src/View/erro404/{$error}.php";
      }
    }