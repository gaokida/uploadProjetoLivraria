<?php
require_once('../conexao.php');
$nome = filter_input(INPUT_POST,'nome');
$data_publicacao = filter_input(INPUT_POST,'data_publicacao');
$id_autor = filter_input(INPUT_POST,'id_autor');

$inserir = "INSERT into livro (nome, data_publicacao, id_autor) ";
$inserir .= "VALUES ('$nome','$data_publicacao',$id_autor)";

$result = mysqli_query($conexao,$inserir);



?>