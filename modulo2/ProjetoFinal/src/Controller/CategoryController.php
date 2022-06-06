<?php

declare(strict_types=1);

namespace App\Controller;
Class CategoryController extends AbstractController{
 public function CategoryAddAction():void{
    parent::renderCategory("add");
 }

 public function editCategoryAction():void
 {
     parent::renderCategory("edit");
 }

 public function listCategoryAction():void
 {
     parent::renderCategory("list");
 }
}