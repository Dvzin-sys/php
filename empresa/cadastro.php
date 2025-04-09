<?php
include ("conexao.php");

$nome = $_POST['nome'];
$cpf= $_POST['cpf'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];


$sql = " INSERT INTO funcionario (nome,cpf,idade,sexo,cidade,bairro,rua,numero)
values ('$nome','$cpf','$idade','$sexo','$cidade','$bairro','$rua','$numero')";
if (mysqli_query ($conexao,$sql)) {
    header('Location: index.html');
 } else {
     echo "erro" . mysqli_connect_erro($conexao);
 }

mysqli_close($conexao);
?>