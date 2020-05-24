<?php
//requisao do tipo post
header('Content-type: text/javascript');
include "../classes/Conexao.php";
include_once "../classes/Startup.php";
$banco = new Conexao();
$conexao = $banco->abrir();
$id_pessoa = $_POST['id_pessoa'];
$startup = new Startup();

echo $startup->getOne($conexao,$id_pessoa);