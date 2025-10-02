<?php
require_once "View/UsuarioView.php";
require_once "Model/UsuarioModel.php";

class UsuarioController {
    private $usuarioModel;

    public function __construct($pdo) {
        $this->usuarioModel = new UsuarioModel($pdo);
    }

    public function listar() {
        $usuarios = $this->usuarioModel->buscarTodos();
        $view = new UsuarioView();
        $view->exibirUsuarios($usuarios);
        return $view;
    }
}
?>
