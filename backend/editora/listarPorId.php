<?php

    require_once("../conexao.php");
    $editora_id = $_GET['id'];
    $consulta ="SELECT * FROM editora ";
    $consulta .=" WHERE id = {$editora_id}";
    $resultado = mysqli_query($conexao,$consulta);

    if(!$resultado){
        die("ERRO !!");
    }

    while($a = mysqli_fetch_array($resultado)){
        echo json_encode(["id" =>$a['id'],
                          "nome" => $a['nome'],
                          "cidade" => $a['cidade'],
                          "estado" => $a['estado']]);
    }
    

?>