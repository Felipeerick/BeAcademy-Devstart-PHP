<?php

declare(strict_types=1);

namespace App\Controller;

Class ProductController extends AbstractController{
  public function listAction():void
  {
     parent::renderProduct("list");
  }

  public function addAction():void
  {
   parent::renderProduct("add");
  }

  public function editAction():void
  {
   parent::renderProduct("edit");
  }
}