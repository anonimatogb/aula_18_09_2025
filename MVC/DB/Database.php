<?php
$dsn = 'mysql: host = localhost; dbname=zamasu;charset=utf8';
$usuario= 'root';
$senha= "" ;
try{
    $pdo = new PDO($dsn, $usuario, $senha);
    $pdo -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo"Conectado ao banco de dados !";
}catch(PDOException $e){
    echo"Erro: " . $e-> getMessage();

}
?>