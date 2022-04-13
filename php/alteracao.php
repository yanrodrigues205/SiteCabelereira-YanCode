
<?php
$hostname = "localhost";
$username = "root";
$pass = "";
$database = "clientes";
$conexao = mysqli_connect($hostname,$username,$pass,$database);
$cmd = "SELECT * FROM clientes";
$result = mysqli_query($cmd);

if(isset($_POST['botao'])){
    $senha1 = $_POST['senha1'];
    $senha2 = $_POST['senha2'];
    $botao = $_POST['botao'];

    if($senha1 == $senha2){
while($obj = mysql_fetch_array($result)){
    $cod = $obj[0];
    $sql = "UPDATE `clientes` SET `cli_senha`='.$senha1.' WHERE `cli_cod` = '.$cod.'";
}}
else{
    echo "<script language='javascript' type='text/javascript'>
            alert('As senhas são diferentes, por favor digite as duas da mesma forma !');
           </script>";
}}
?>
