<?php

require_once "C:/Turma1/xampp/htdocs/aula_18_09_2025/MVC/Controller/UsuarioController.php";
require_once "C:/Turma1/xampp/htdocs/aula_18_09_2025/MVC/DB/DataBase.php";

$UsuarioController = new UsuarioController($pdo);

if(isset($_GET['id'])){

  $id = $_GET['id'];
  $usuario = $UsuarioController->deletar($id);
  header("location: ../../index.php");}
  else{
header("location: ../../index.php");
 
  }

 



?>