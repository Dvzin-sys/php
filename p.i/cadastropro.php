<?php

      include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];


$sql="INSERT INTO candidato(email,senha)
VALUES ('$email', '$senha')";
if(mysqli_query($conexao, $sql)){
echo"usuario cadastrado com sucesso";
header('Location: telainicio.html');

}else{
echo "Erro". mysqli_connect_error($conexao);
}

mysqli_close($conexao);

?>