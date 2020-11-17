<?php

    require_once('../conexao.php');

    $result = mysqli_query($conexao,'SELECT * FROM autor WHERE id = '.filter_input(INPUT_GET,'id'));
    
     while ($a = mysqli_fetch_array($result)) {
        echo json_encode(['id' => $a['id'],
        'nome' => $a['nome']]);
     }
    
?>