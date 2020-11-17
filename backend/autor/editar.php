<?php

    require_once('../conexao.php');
    $nome = filter_input(INPUT_POST,'nome');
    $id = filter_input(INPUT_POST,'id');
    
     $sql = "UPDATE autor SET nome = '$nome' where id = $id";
     $result = mysqli_query($conexao,$sql );


    ?>