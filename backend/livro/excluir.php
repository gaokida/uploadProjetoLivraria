<?php
    require_once("../conexao.php");
    $livro_id = $_GET["id"];

    $consulta = "DELETE FROM livro ";
    $consulta .=" WHERE id = {$livro_id}";
    $resultado = mysqli_query($conexao,$consulta);

    if(!$resultado) {
        die("Erro na exclusao do Livro !");
    }
    
?>