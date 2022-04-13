<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../fotos/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../html/cli_adm.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiministração - Amanda Araujo</title>
</head>
<body>
    <center>
<header>
    <h1>Clientes Cadastrados - Amanda Studios</h1>
    <h3><i>Administração / Clientes Registrados na Plataforma</i></h3>
    <a href="../html/administracao.html" class="sair">X</a><br>
    <a href="../html/administracao.html" class="sair1">Sair</a><br>
</header>


  

    <form action="clientes_adm.php" method="post">
    <input type="text" name="pesquisa" class="pesquisa" placeholder="Digite o nome do Usuário!">
    <input type="submit" name="bt" class="bt" value="Pesquisar!"><br><br>
    </form>

    <div class="componentes">
<a class='cod1'>COD</a>
<a class='nome1'>Nome</a>
<a class='telefone1'>Telefone</a>
<a class='endereco1'>Endereco</a>
<a class='email1'>E-mail</a>
<a class='cpf1'>C.P.F</a>
<a class='senha1'>Senha</a><br>
</div>
    <?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    $id = mysql_connect("localhost", "root", "");
    $cnx = mysql_select_db("clientes", $id);

    if(isset($_POST['pesquisa']))
    {
        $pesquisa = $_POST['pesquisa'];
        $sql = "SELECT * FROM clientes where cli_nome like \"%$pesquisa%\"";
    }else $sql = "SELECT * FROM clientes";
    
    $resultado = mysql_query($sql);
    while($obj = mysql_fetch_array($resultado)){
$nome = $obj[1];
$telefone = $obj[2];
$endereco = $obj[3];
$email = $obj[4];
$cpf = $obj[5];
$senha = $obj[6];
$cod = $obj[0];

echo "<div class='table'><a class='cod'>$cod</a>";
echo "<a class='nome'>$nome</a>";
echo "<a class='telefone'>$telefone</a>";
echo "<a class='endereco'>$endereco</a>";
echo "<a class='email'>$email</a>";
echo "<a class='cpf'>$cpf</a>";
echo "<a class='senha'>$senha</a>";
echo "<a href=\"delete.php?cod=$cod\"><img src='../fotos/lixeira.png' class='lixeira'></a>";
echo "<a href=\"delete.php?cod=$cod\" class='deletar'>Deletar Conta!</a><br></div>";
    }
    ?>
    </center>
</body>
</html>