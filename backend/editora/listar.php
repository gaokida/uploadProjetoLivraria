<?php
    require_once("../conexao.php");

    $consulta = "SELECT * FROM editora";
    $conecta = mysqli_query($conexao,$consulta);
    if(!$conecta){
        die("ERRO NO BANCO");
    }
    $editora = [];

    while($a = mysqli_fetch_array($conecta)){
        $editora[] = [
            "id" => $a['id'],
            "nome" => $a['nome'],
            "cidade" => $a['cidade'],
            "estado" => $a['estado']
        ];
    }

    echo json_encode($editora);

?>