<?php
require_once("../conexao.php");
$nome = filter_input(INPUT_POST,'nome');
$id = filter_input(INPUT_POST, 'id');
$data_publicacao = filter_input(INPUT_POST, 'data_publicacao');
$id_autor = filter_input(INPUT_POST,'id_autor');

$atualiza = "UPDATE livro SET "; 
$atualiza .= " nome = '$nome', data_publicacao = '$data_publicacao', id_autor = $id_autor WHERE id = $id";

$resul = mysqli_query($conexao,$atualiza);


?>

