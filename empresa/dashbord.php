<link rel="stylesheet" href="style.css">

<?php

// Incluindo a conexão
include("conexao.php");


$sql = "SELECT * FROM funcionario";

$result = mysqli_query($conexao, $sql);
?>



<div class="tabela">
    <h2>Lista de funcionarios</h2>
    <table>
      <tr>
        <th>nome</th>
        <th>cpf</th>
        <th>idade</th>
        <th>sexo</th>
        <th>cidade</th>
        <th>bairro</th>
        <th>rua </th>
        <th>numero</th>
      
      </tr>
      <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          
          <td><?php echo $row['nome']; ?></td>
          <td><?php echo $row['cpf']; ?></td>
          <td><?php echo $row['idade']; ?></td>
          <td><?php echo $row['sexo']; ?></td>
          <td><?php echo $row['cidade']; ?></td>
          <td><?php echo $row['bairro']; ?></td>
          <td><?php echo $row['rua']; ?></td>
          <td><?php echo $row['numero']; ?></td>
        
        </tr>
      <?php } ?>
    </table>
  </div>