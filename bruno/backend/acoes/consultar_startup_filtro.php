<?php
header('Content-type: text/javascript');
include "../classes/Conexao.php";
include_once "../classes/Startup.php";
$banco = new Conexao();
$conexao = $banco->abrir();
$startup = new Startup();
if (!isset($_GET['sp']) || !isset($_GET['ss']) || !isset($_GET['estado']) || !isset($_GET['publico']) || !isset($_GET['cep']) || !isset($_GET['categoria'] )){
    echo json_encode("[{Aviso:Você esqueceu algum parametro!}]");
    return;
}
$startup->setSegmentoPricipal($_GET['sp']);
$startup->setSegmentoSecundario($_GET['ss']);
$startup->setEstado($_GET['estado']);
$startup->setPublicoAlvo($_GET['publico']);
$startup->setCep($_GET['cep']);
$startup->setCargoFuncao($_GET['categoria']);

echo $startup->filtro($conexao);
