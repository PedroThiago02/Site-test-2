<?php

 $dbHost = 'Localhost';
 $dbUsername = 'root';
 $dbPassowrd = '';
 $dbName = 'Cadastro';
 
 $conexao = new mysqli($dbHost,$dbUsername,$dbPassowrd,$dbName)
 
if(&conexao->connect_errno)
{
  echo('Erro');
}
else {
  echo('Sucesso')
}
?>