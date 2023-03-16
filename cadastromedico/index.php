<?php
session_start();
include_once '../conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Paciente</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <?php require_once"../templates/menu.php";?>
  <h1>Lista de Médicos</h1>

  <table class="table table-stripped">
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>CRM</th>
      <th>Telefone</th>
      <th></th>
    </tr>

    <?php
    $sql = "SELECT * FROM medicos"; // Cria a sql
    $resultado = $pdo->query($sql); // Executa no banco
    $medicos = $resultado->fetchAll(); // Pega os resultados

    foreach ($medicos as $medico) { ?>
      <tr>
        <td><?= $medico['id'] ?></td>
        <td><?= $medico['nome'] ?></td>
        <td><?= $medico['crm'] ?></td>
        <td><?= $medico['telefone'] ?></td>
        <td><a href="mostrarMedico.php?id=<?= $medico['id'] ?>">Editar</a></td>
      </tr>
    <?php } ?>
  </table>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>