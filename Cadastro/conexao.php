<?php
$servidor ="localhost";
$usuario = "root";
$senha = "123456";
$dbname="face";

$conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao){
 die("Houve um erro: ".mysqli_connect_error());
}



?>