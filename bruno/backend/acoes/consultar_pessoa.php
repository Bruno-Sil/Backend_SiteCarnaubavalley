<?php
header('Content-type: text/javascript');
include "../classes/Conexao.php";
include "../classes/Pessoa.php";

$banco = new Conexao();
$conexao = $banco->abrir();

$pessoa = new Pessoa();
$pessoas = $pessoa->consultar($conexao);


echo $pessoas;

