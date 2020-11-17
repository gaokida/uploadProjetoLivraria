<?php

require_once('../conexao.php');

session_start();

if( isset($_POST["login"] ) ){
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $entrar = "SELECT * ";
    $entrar .= "FROM usuario ";
    $entrar .= "WHERE login = '{$login}' and senha = '{$senha}' ";

    $acesso = mysqli_query($conexao, $entrar);
    if(!$acesso){
        die("Falha na consulta ao banco");
    }
    $info = mysqli_fetch_assoc($acesso);
    if(empty($info) ){
        echo json_encode( false);
    }else{
        $_SESSION["user_portal"] = $info["cod"];
        echo json_encode( true);
    }

}
?>
