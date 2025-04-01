<?php



$servidor = "localhost";

$usuario = "root";



$dbname = "site";

$senha="123456";

$conexao = mysqli_connect($servidor, $usuario,$dbname, $senha );



if (!$conexao) {

    die("Houve um erro: " . mysqli_connect_error());

}



?>


