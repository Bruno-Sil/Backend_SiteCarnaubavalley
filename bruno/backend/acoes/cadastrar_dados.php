<?php
session_start();
include_once "../classes/Conexao.php";
include_once "../classes/Startup.php";
$banco = new Conexao();
$conexao = $banco->abrir();
$id_pessoa = $_SESSION['id'];
$startup = new Startup();
$startup->setModeloNegocio($_POST['modelo']);
$startup->setPublicoAlvo($_POST['publico']);
$startup->setMomento($_POST['momento']);//valor op
$startup->setSegmentoPricipal($_POST['sp']);
$startup->setSegmentoSecundario($_POST['ss']);
$startup->setTamanhoTime($_POST['time']);//valor op
$startup->setFaturamentoAnual($_POST['faturamento']);


//verficar campos nulos
if ($startup->getModeloNegocio() == "" || $startup->getPublicoAlvo() == "" ||$startup->getMomento() == "" || $startup->getSegmentoPricipal() == "" || $startup->getSegmentoSecundario() == "" || $startup->getTamanhoTime() == "" || $startup->getFaturamentoAnual() == ""){
    echo "Campos obrigatorios deixados em branco!";
    return;
}
$startup->alterarDados($conexao,$id_pessoa);
//redirecionamento de pagina
header("location: ../../startup/dados.php");
