<?php
$id = mysql_connect("localhost", "root", "");
$cnx = mysql_select_db("clientes", $id);

$cod_agenda = $_GET['cod_agenda'];

$sql = "DELETE FROM agenda where age_cod = $cod_agenda";
mysql_query($sql);
mysql_close($id);
header("location:../php/agendados_adm.php")
?>