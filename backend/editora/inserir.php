<?php
    require_once("../conexao.php");
    $nome = filter_input(INPUT_POST,'nome');
    $cidade = filter_input(INPUT_POST,'cidade');
    $estado = filter_input(INPUT_POST,'estado');

    $inserir = "INSERT INTO editora (nome, cidade, estado) VALUES ";
    $inserir .=" ('$nome','$cidade','$estado')";

    $conecta = mysqli_query($conexao,$inserir);
    

?>