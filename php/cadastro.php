<?php
$identifica = mysql_connect("localhost", "root", "");
$cnx = mysql_select_db("clientes", $identifica);

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];


$sql = "INSERT into clientes(cli_nome, cli_telefone, cli_endereco, cli_email, cli_cpf, cli_senha)
 values ('$nome', '$telefone', '$endereco','$email', '$cpf', '$senha')";

 mysql_query($sql);
 mysql_close($identifica);

header ("location: ../html/index.html")

?>