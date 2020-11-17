<?php
    require_once('../conexao.php');

    $consulta =("SELECT * FROM livro");
    $resultado = mysqli_query($conexao,$consulta);

    if(!$resultado){
        die("Erro na consulta");
    }
    $livro = [];
    while($a = mysqli_fetch_array($resultado)){
      $livro [] = [
        "id" => $a['id'],
        "nome" => $a['nome'],
        "data_publicacao" => $a['data_publicacao'],
        "id_autor" => $a['id_autor']
      ];
    }
    echo json_encode($livro);

?>