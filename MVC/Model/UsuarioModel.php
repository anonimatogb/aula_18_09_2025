<?php
class UsuarioModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function buscarTodos(): array {
        $stmt = $this->pdo->query('SELECT * FROM usuarios');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}



?>