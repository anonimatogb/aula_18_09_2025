<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

         <label for="email">Email:</label>
        <input type="email" name="email" required><br>

         <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <input type="submit">
    </form>
</body>
</html>

<?php

require_once "C:/Turma1/xampp/htdocs/aula_18_09_2025/MVC/Controller/UsuarioController.php";
require_once "C:/Turma1/xampp/htdocs/aula_18_09_2025/MVC/DB/DataBase.php";

$UsuarioController = new UsuarioController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $UsuarioController -> cadastrar($nome,$email,$senha);
}


?>