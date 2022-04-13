<?php
//DECLARAÇÃO DE VARIÁVEIS
$usuario = $_POST['nome'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];
$conexao = new mysqli('localhost', 'root', '', 'clientes');



if(isset($entrar)){
    $verifica = $conexao -> query("SELECT * FROM clientes WHERE cli_nome = '$usuario' AND cli_senha = '$senha'")
    or die("erro ao selecionar elementos!");
    $rows = $verifica -> num_rows;

    if($rows <=0){
        echo "<script language='javascript' type='text/javascript' charset='utf-8'>
     alert('$usuario seu login ou senha foram incorretos, Por favor verifique!')
     window.history.back()</script>";
     die();
    }else{
        if(($usuario == "Amanda Araujo") && ($senha == "amanda123")){
            header("location: ../html/administracao.html");
        }else{
        header("location: ../html/principal.html");
        }
    }
}
?>