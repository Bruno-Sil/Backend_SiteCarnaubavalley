<?php
session_start();
include_once "../classes/Conexao.php";
include_once "../classes/Startup.php";
$banco = new Conexao();
$conexao = $banco->abrir();
$id_pessoa = $_SESSION['id'];
$startup = new Startup();
$startup->setDescricaoCurta($_POST['descricao_ct']);
$startup->setDescricao($_POST['descricao']);
$startup->setTags($_POST['tags']);//valor op

//verficar campos nulos
if ($startup->getDescricaoCurta() == "" || $startup->getTags() == "" ){
    echo "Campos obrigatorios deixados em branco!";
    return;
}
$startup->alterarDescricao($conexao,$id_pessoa);
header("location: ../../startup/descricoes.php");
