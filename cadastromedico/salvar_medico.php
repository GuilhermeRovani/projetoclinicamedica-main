
<?php
session_start();
include("../login/conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$nascimento = filter_input(INPUT_POST, 'datanasc');
$cpf = filter_input(INPUT_POST, 'cpf');
$email = filter_input(INPUT_POST, 'email');
$telefone = filter_input(INPUT_POST, 'tel');
$crm = filter_input(INPUT_POST, 'crm');
$situacao = filter_input(INPUT_POST, 'situacao');
$especialidade = filter_input(INPUT_POST, 'especialidade');
$rua = filter_input(INPUT_POST, 'rua');
$bairro = filter_input(INPUT_POST, 'bairro');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');
$cep = filter_input(INPUT_POST, 'cep');

$sql = "INSERT INTO medicos 
        (
          nome, 
          nascimento,
          cpf, 
          email, 
          telefone, 
          crm, 
          situacao, 
          especialidade, 
          rua, 
          bairro, 
          cidade, 
          estado, 
          cep
        )
        VALUES (
          :nome, 
          :nascimento,
          :cpf, 
          :email, 
          :telefone, 
          :crm, 
          :situacao, 
          :especialidade, 
          :rua, 
          :bairro, 
          :cidade, 
          :estado, 
          :cep
        )";

$query = $pdo->prepare($sql);
                      
$resultado = $query->execute([
  ':nome' => $nome, 
  ':nascimento' => $nascimento,
  ':cpf' => $cpf, 
  ':email' => $email, 
  ':telefone' => $telefone, 
  ':crm' => $crm, 
  ':situacao' => $situacao, 
  ':especialidade' => $especialidade, 
  ':rua' => $rua, 
  ':bairro' => $bairro, 
  ':cidade' => $cidade, 
  ':estado' => $estado, 
  ':cep' => $cep
]);

$id = $pdo->lastInsertId();

if($id > 0){
  header('Location: index.php');
}else{
  header('Location: formulario.php');
}

  
?>