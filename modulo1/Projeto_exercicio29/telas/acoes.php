<?php
function listar()
{
     $contatos = file("dados/contato.csv");
     
     include "telas/listar.php";
};

function cadastro()
{
    if($_POST){

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email= $_POST['email'];  
     
    $arquivo = fopen("dados/contato.csv","a+");
    fwrite($arquivo,"{$nome};{$email};{$telefone};".PHP_EOL);

    fclose($arquivo);

    $mensagem = "Cadastro realizado com sucesso!";
    include "telas/mensagem.php";
};

    include "telas/cadastro.php";
};

function login():void
{
     include "telas/login.php";
};

function home():void
{
     include "telas/home.php";
};

function admin():void
{
     include "telas/admin.php";
};

function relatorio():void
{
    include "telas/relatorio.php";
};

function excluir(){
    
     $id = $_GET['id'];

     $contatos = file("dados/contato.csv");
     unset($contatos[$id]);
     unlink("dados/contato.csv");

     $arquivo =  fopen("dados/contato.csv", "a+");
     
     foreach($contatos as $cadaContatos){
     fwrite($arquivo, $cadaContatos);
     };

     $mensagem = "Contato excluido! :}";
     include "telas/mensagem.php";
};

function editar(){ 
     $id = $_GET['id'];
     $contatos = file("dados/contato.csv");

     if($_POST){
          $nome = $_POST["nome"];
          $email = $_POST["email"];
          $telefone = $_POST["telefone"];

          $contatos[$id] = "{$nome}; {$email}; {$telefone}".PHP_EOL;
            
          unlink("dados/contato.csv");

          $arquivo =  fopen("dados/contato.csv", "a+");

          foreach($contatos as $cadaContato){
               fwrite($arquivo, $cadaContato);
          };

          fclose($arquivo);

          $mensagem = "Editado com sucesso!";

          include "telas/mensagem.php";
     };

     $dados = explode(";",$contatos[$id]);
     

     include 'telas/editar.php';  

};

?>