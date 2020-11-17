<?php

    require_once('../conexao.php');

    $result = mysqli_query($conexao,'SELECT * FROM autor');
    
    $autores = [];
    while ($a = mysqli_fetch_array($result)) {
        $autores[] = [
            "id" => $a['id'],
            "nome" => $a['nome']
        ];
    }
    
    echo json_encode($autores);
    


?>