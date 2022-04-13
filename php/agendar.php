<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$idt = mysql_connect("localhost", "root", "");
$data = mysql_select_db("clientes", $idt);

$nome = $_POST['nome'];
$dia = $_POST['dia'];
$hr = $_POST['hr'];
$cabelo =$_POST['cabelo'];
$sombrancelha = $_POST['sombrancelha'];
$cilios = $_POST['cilios'];
$unhas = $_POST['unhas'];
$make = $_POST['make'];

$cmd = "INSERT INTO `agenda`(age_nome, age_dia, age_hr, age_cabelo, age_sombrancelha, age_cilios, age_unhas, age_make) values ('$nome', '$dia', '$hr', '$cabelo', '$sombrancelha', '$cilios', '$unhas', '$make')";

mysql_query($cmd);
mysql_close($idt);

echo "<script language='javascript' type='text/javascript' charset='UTF-8'>
alert('$nome , O seu agendamento marcado para dia $dia as $hr horas! Em caso de falta avisar com antecedencia.')
window.history.back()</script>";
?>