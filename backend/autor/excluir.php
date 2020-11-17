<?php

    require_once('../conexao.php');
    $id = filter_input(INPUT_GET,'id');
    
     $sql = "DELETE FROM autor WHERE id = $id";
     
     $result = mysqli_query($conexao,$sql );


    ?>