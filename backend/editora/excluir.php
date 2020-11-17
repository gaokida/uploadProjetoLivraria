<?php
    require_once("../conexao.php");
    //PODE COLOCAR ASSIM TAMBÉM
    //$livro_id = $_GET["id"];
    $id = filter_input(INPUT_GET,'id');
    $excluir = "DELETE FROM editora ";
    $excluir .=" WHERE id = $id";

    $conecta = mysqli_query($conexao,$excluir);
    if(!$conecta){
        die("ERRO NA EXCLUSAO !!");
    }

?>