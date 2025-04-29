

<?php

// Incluindo a conexão
include("conexao.php");


$sql = "SELECT * FROM candidato";

$result = mysqli_query($conexao, $sql);
?>

<a href="candidato.html"><button>voltar</button></a>


<div class="tabela">
    <h2>Lista de Candidatos</h2>
    <table>
      <tr>
        <th>id</th>
        <th>nome</th>
        <th>email</th>
        <th>telefone</th>
        <th>senha</th>
       
      
      </tr>
      <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
        <td><?php echo $row['id_candidato']; ?></td>
          <td><?php echo $row['nome']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['telefone']; ?></td>
          <td><?php echo $row['senha']; ?></td>
          <td>
    <a href="editar_candidato.php?id=<?php echo $row['id_candidato']; ?>">Editar</a>
    <a href="deletarcand.php?id=<?php echo $row['id_candidato']; ?>">Deletar</a>

  </td>
        
        </tr>
        <style>
  .container {
    font-family: sans-serif;
    margin: 20px;
  }

  h2 {
    color: #333;
    margin-bottom: 15px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden; 
  }

  th, td {
    padding: 10px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #f2f2f2;
    font-weight: bold;
  }

  tr:hover {
    background-color: #f9f9f9;
  }
  .deletar-btn {
    background-color: #f44336;
    color: white;
    border: none;
    padding: 8px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    cursor: pointer;
    border-radius: 3px;
    transition: background-color 0.3s ease;
  }

  .deletar-btn:hover {
    background-color: #d32f2f;
  }
</style>
      <?php } ?>
    </table>
  </div>