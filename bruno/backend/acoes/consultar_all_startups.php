<?php
header('Content-type: text/javascript');
include "../classes/Conexao.php";
include_once "../classes/Startup.php";
$banco = new Conexao();
$conexao = $banco->abrir();
$startup = new Startup();

echo $startup->getAll($conexao);
