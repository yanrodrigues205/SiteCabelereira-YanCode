<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="icon" href="../fotos/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../html/agendados.css">
    <title>Agendamento Clientes - Amanda Araújo</title>
</head>
<body>
    <center>
        <h1>Clientes com Serviços agendados - Amanda Araújo</h1>

        <a class="voltar"href="../html/administracao.html">Voltar</a><br>
<form method="post" action="agendados_adm.php" id="formulario">
<input type="text" name="pesquisa" class="pesquisa" placeholder="Digite o nome de um Cliente!">
    <input type="submit" name="bt" class="bt" value="Pesquisar!"><br><br>
</form>


    <?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    $idt = mysql_connect("localhost", "root", "");
    $cnx = mysql_select_db("clientes", $idt);

    if(isset($_POST['pesquisa'])){
        $pesquisa = $_POST['pesquisa'];
        $cmd = "SELECT * FROM agenda WHERE cli_nome like \"%$pesquisa%\"";
    }else
    $cmd = "SELECT * FROM agenda";

    $resultado = mysql_query($cmd);
    while($obj = mysql_fetch_array($resultado)){


$cod_agenda = $obj[0];   
$nome = $obj[1];
$dia = $obj[2];
$hr = $obj[3];
$cabelo = $obj[4];
$sombrancelha = $obj[5];
$cilios = $obj[6];
$unhas = $obj[7];
$make = $obj[8];
date_default_timezone_set('America/Sao_Paulo');
$hoje = date('Y-m-d');

if($dia >= $hoje){
echo "<div class=\"agenda\"><a class='desmarcar' href=\"desmarcar.php?cod_agenda=$cod_agenda\">X</a><br>";
echo " <a class='item'>Cliente </a> <a class='nome'>$nome</a>,<br>";
echo "<a class='item'>Cliente código -- </a>$cod_agenda<br>";
echo "<a class='item'>Dia:</a>$dia&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;";
echo "<a class='item'>Hora:</a>$hr<br><br>";
echo "<i>SERVIÇOS SELECIONADOS</i><br>";
echo "<a class='item'>Cabelo: </a> $cabelo<br>";
echo "<a class='item'>Sombrancelha:  </a> $sombrancelha<br>";
echo "<a class='item'>Cilios:  </a>$cilios<br>";
echo "<a class='item'>Unhas:  </a>$unhas<br>";
echo "<a class='item'>Maquiagem: </a>$make<br></div><br><br><br>";
}
    }



    ?>
    </center>
</body>
</html>