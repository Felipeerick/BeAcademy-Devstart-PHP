<?php

declare(strict_types=1);

ini_set("display_errors", 1);

include("../vendor/autoload.php");

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\Error;

$url = explode("?",$_SERVER["REQUEST_URI"])[0];

function createRoute(string $controller, string $method){
   return[
    "controller" => $controller,
     "method" => $method
   ];
};

$routes = [
  "/" =>  createRoute(IndexController::class, "indexAction"),

  "/produtos" => createRoute(ProductController::class, "listAction"),

   "/produtos/novo" => createRoute(ProductController::class, "addAction"),

   "/produtos/edit" => createRoute(ProductController::class, "editAction"),

     
    "/login" => createRoute(IndexController::class, "loginAction"),

 "/categoria" => createRoute(CategoryController::class, "listCategoryAction"),

 "/categoria/edit" => createRoute(CategoryController::class, "editCategoryAction"),

 "/categoria/add" => createRoute(CategoryController::class, "CategoryAddAction")
        ];

       if(false === isset($routes[$url])){
       (new Error()) -> error404();  
        exit;
};

$controllerName = $routes[$url]["controller"];
$methodName = $routes[$url]["method"];


(new $controllerName) -> $methodName();

//echo $url;