<?php
    require_once("../conexao.php");

    $livro_id = $_GET["id"];
    $consulta ="SELECT * FROM livro ";
    $consulta .=" WHERE id = {$livro_id}";
    $resultado = mysqli_query($conexao,$consulta);
    if(!$resultado){
        die("Erro ");
    }

    while($a = mysqli_fetch_array($resultado)){
        echo json_encode(["id"=> $a['id'],
            "nome"=> $a['nome'],
            "data_publicacao"=> $a['data_publicacao'],
            "id_autor"=> $a['id_autor']]);
    }


?>