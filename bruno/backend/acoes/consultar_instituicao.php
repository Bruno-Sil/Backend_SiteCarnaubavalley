<?php
header('Content-type: text/javascript');
include_once "../classes/Conexao.php";
include_once "../classes/Instituicao.php";
$banco = new Conexao();
$conexao = $banco->abrir();
$instituicao = new Instituicao();

$instituicoes = $instituicao->consultar($conexao);

echo $instituicoes;

