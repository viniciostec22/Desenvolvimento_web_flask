<?php
ini_set( 'display_errors' , 1 );
ini_set( 'display_startup_errors' , 1 );
include_once("conexao.php");

//$email = $_POST [ 'email' ];

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($dados);

$query_newslatters = "INSERT INTO newslatters (email) VALUES ('". $dados['email'] ."')";

$cad_newslatter = $conn->prepare($query_newslatters);
$cad_newslatter->execute();
