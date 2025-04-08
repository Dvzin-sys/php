<link rel="stylesheet" href="style.css">

<?php

// Incluindo a conexão
include("conexao.php");


$sql = "SELECT * FROM aluno";

$result = mysqli_query($conexao, $sql);
?>



<div class="tabela">
    <h2>Lista de Usuários</h2>
    <table>
      <tr>
        <th>nome</th>
        <th>telefone</th>
        <th>email</th>
        <th>data_nasc</th>
      
      </tr>
      <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          
          <td><?php echo $row['nome']; ?></td>
          <td><?php echo $row['data_nasc']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['telefone']; ?></td>
        
        </tr>
      <?php } ?>
    </table>
  </div>