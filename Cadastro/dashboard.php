

<?php

// Incluindo a conexão
include("conexao.php");


$sql = "SELECT * FROM empresa";

$result = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<a href="empresa.html"><button>voltar</button></a>


  <div class="container">
    <h2>Lista de Usuários</h2>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
      </tr>
      <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $row['id_empresa']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['senha']; ?></td>
        </tr>
        <td>
    <a href="editar_empresa.php?id=<?php echo $row['id_empresa']; ?>">Editar</a>
    <a href="deletaremp.php?id=<?php echo $row['id_empresa']; ?>">deletar</a>
  </td>
      <?php } ?>
     
    </table>
    <td>
    
  </td>
  </div>

    </table>
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
  </div>
</body>
</html>