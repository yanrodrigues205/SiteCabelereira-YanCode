<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../fotos/logo.png">
    <link rel='stylesheet' href='../html/alterar-style.css'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha - Amanda Araujo</title>
</head>
<body>
   
    <center>
    <i><h1> Recuperação de Senha - Amanda Araujo </h1></i>
    <i class="location">Login / Recuperar Senha</i>
    <a class="sair" href="../html/index.html">X</a>
    <a class="sair1" href="../html/index.html">Voltar</a>
    <section class="info">
        <a class="frase">
            Para recuperar sua senha você precisa digitar todas as informações corretas!
        </a>
    </section>
<form action="alterarsenha.php" method="post" class="form1">
    <input type="text" name="usuario" class="usuario" placeholder="Digite seu Usuário!" required><br>
    <input type="text" name="telefone" class="telefone" placeholder="Digite seu Telefone!" required><br>
    <input type="text" name="cpf" class="cpf" placeholder="Digite seu CPF!" required><br><br>
    <i><h3>Digite sua nova senha!</h3></i>
    <input type='password' name='senha1' class='senha1' placeholder='Digite sua nova senha!' required><br>
    <input type='password' name='senha2' class='senha2' placeholder='Digite sua senha novamente!' required><br><br>
    <input type='submit' name='bt' class='bt' value='Alterar'><br>
  
</form>

<?php 

    error_reporting(E_ALL ^ E_DEPRECATED);
$idt = mysql_connect("localhost", "root", "");
$data = mysql_select_db("clientes", $idt);


$cmd = "SELECT * FROM clientes";
$result = mysql_query($cmd);

$usuario = isset($_POST['usuario']);
$telefone = isset($_POST['telefone']);
$cpf = isset($_POST['cpf']);


while($obj = mysql_fetch_array($result)){
 
    if(isset($_POST['bt'])){
        $usuario = $_POST['usuario'];
        $telefone = $_POST['telefone'];
        $cpf = $_POST['cpf'];
        $senha1 = $_POST['senha1'];
        $senha2 = $_POST['senha2'];
        $cod = $obj[0];
        

        if((($usuario) == ($obj[1])) && (($telefone) == ($obj[2])) && (($cpf) == ($obj[5]))){
 
if($senha1 == $senha2){
    $sql = "UPDATE `clientes` SET `cli_senha`= '$senha2' WHERE `cli_cod` = '$cod'";
    $on = mysql_query($sql);
    $obj = mysql_fetch_array($result);
    echo "<script language='javascript' type='text/javascript'>
            alert('Sua senha foi modificada com sucesso $usuario!');
           </script>";
        }else if($senha1 != $senha2){
            echo "<script language='javascript' type='text/javascript'>
            alert('As senhas digitadas foram diferentes, Tente Novamente!');
            </script>";
    }     
}else
if((($usuario) != ($obj[1])) && (($telefone) != ($obj[2])) && (($cpf) != ($obj[5]))){
echo "<script>
alert('Seus dados para alteração de senha foram incorretos!');
</script>";
}
    }}

?>
</center>
</body>
</html>