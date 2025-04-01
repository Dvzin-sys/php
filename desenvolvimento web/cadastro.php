<?php
include_once("conexao.php");



$nome = $_POST['nome'];
$data_nasc= $_POST['data_nascimento'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$serie = $_POST['serie'];
$senha = $_POST['senha'];

$sql = " INSERT INTO aluno (nome,data_nasc,email,telefone,serie,senha)
values ('$nome',$data_nasc,'$email','$telefone','$serie','$senha')";
if (mysqli_query($conexao,$sql)){
    echo "Cadastrado com sucesso";  
}
else{  
    echo "Erro ao cadastrar" . mysqli_connect_error($conexao);
}


mysqli_close($conexao);

?>