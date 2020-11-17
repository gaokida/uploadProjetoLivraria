<?php

    require_once('../conexao.php');
    $nome = filter_input(INPUT_POST,'nome');
     $sql = "INSERT INTO autor (nome) VALUES ('$nome')";
     $result = mysqli_query($conexao,$sql );

    ?>