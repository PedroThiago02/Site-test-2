<?php
if(isset($_POST['submit']))
{

includ_once('config.php');

$nome = $_POST['nome'];
$data_nasc = $_POST['date'];
$email = $_POST['email'];
$senha = $_POST['senha'];
}

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,data_nasc,email,senha) VALUES ('$nome','$data_nasc','$email','$senha')");

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-bt">
  <head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='cadastro.css'>
    <script src='main.js'></script>
    <title>Tela de Cadastro</title>
  </head>
  <body>
    <form action="cadastro.php" method="POST">
        <div>
          <h1>Cadastre-Se</h1>
          <label for="nome" class="labelInput">Nome Completo</label>
          <input type="text" name="nome" id="nome" class="inputUser" required>
          <br /><br />
          <label for="date" class="labelInput">Data de Nascimento</label>
          <input type="date" name="date" id="date" class="inputUser" required>
          <br /><br />
          <label for="email" class="labelInput">Email</label>
          <input type="text" name="email" id="email" class="inputUser" required>
          <br /><br />
          <label for="senha" class="labelInput"  >Senha</label>
          <input type="password" name="senha" id="senha" class="inputUser" required>
          <br /><br />
          <button>Enviar</button>
        </div>
    </form>
  </body>