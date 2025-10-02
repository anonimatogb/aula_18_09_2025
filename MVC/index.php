

<?php
require_once"DB/Database.php";
require_once"Controller/UsuarioController.php";

$stmt= $pdo->prepare('SELECT * FROM usuarios');
$stmt->execute([]);
// $usuario= $stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($usuario);

$usuarioController = new UsuarioController($pdo);
$usuarios = $usuarioController->listar();





?>

