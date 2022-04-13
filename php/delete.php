<?php
$id = mysql_connect("localhost", "root", "");
$cnx = mysql_select_db("clientes", $id);

$cod = $_GET['cod'];

$sql = "DELETE FROM clientes where cli_cod = $cod";
mysql_query($sql);
mysql_close($id);
header("location:../php/clientes_adm.php")
?>