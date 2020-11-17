<?php
    require_once("../conexao.php");
    $id = filter_input(INPUT_POST,'id');
    $nome = filter_input(INPUT_POST,'nome');
    $cidade = filter_input(INPUT_POST,'cidade');
    $estado = filter_input(INPUT_POST,'estado');
    
    $editar = "UPDATE editora SET ";
    $editar .=" nome = '$nome', cidade ='$cidade', estado = '$estado' ";
    $editar .=" WHERE id = $id";

    mysqli_query($conexao,$editar);


?>