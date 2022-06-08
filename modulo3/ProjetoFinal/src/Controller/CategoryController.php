<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

Class CategoryController extends AbstractController{
 public function CategoryAddAction():void{
      
    if($_POST){
       $name = $_POST['name'];
       $description = $_POST['description'];
        
       $con = Connection::getConnection();
       $query = "INSERT INTO tb_category( name, description)VALUES('{$name}', '{$description}');";

       $result = $con->prepare($query);
       $result->execute();

       echo 'Adicionado Com Sucesso!';
    }

    parent::renderCategory("add");
 }

 public function editCategoryAction():void
 {
    $id = $_GET['id'];

    
    $con = Connection::getConnection();

    if($_POST){

        $newName = $_POST['name'];
        $newDesc = $_POST['description'];

        $query = "UPDATE tb_category SET name='{$newName}', description='{$newDesc}' WHERE id='{$id}' ";

        $result = $con ->prepare($query);
        $result->execute();

        echo 'Atualizado Com Sucesso!';
    }

    $query = "SELECT * FROM tb_category WHERE id='{$id}'; ";

    $result = $con ->prepare($query);
    $result->execute();

    $data = $result->fetch(\PDO::FETCH_ASSOC); 
    parent::renderCategory("edit", $data);



 }

 public function listCategoryAction():void
 {

     $con = Connection::getConnection();
     $query = 'SELECT * FROM tb_category;';

     $result = $con ->prepare($query);
     $result->execute();

     //Quando ele realiza o comando ele traz repetindo informação, então para economizar memória, uso o fetch(\PDO::FETCH_ASSOC);

     //O \PDO indica pro PHP que essa classe é nativa dele;

     parent::renderCategory("list", $result);
 }

 public function removeAction():void{
      $con = Connection::getConnection();

      $id = $_GET['id'];

      $query = "DELETE FROM tb_category WHERE id='{$id}'; ";
      $result = $con->prepare($query);
      $result->execute();

 }
}