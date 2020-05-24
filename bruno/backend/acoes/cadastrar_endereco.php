<?php
session_start();
include_once "../classes/Conexao.php";
include_once "../classes/Startup.php";
$banco = new Conexao();
$conexao = $banco->abrir();
$id_pessoa = $_SESSION['id'];
$startup = new Startup();
$startup->setCep($_POST['cep']);
$startup->setNumero($_POST['numero']);//op
$startup->setLogradouro($_POST['log']);
$startup->setComplemento($_POST['complemento']);
$startup->setBairro($_POST['bairro']);
$startup->setEstado($_POST['estado']);
//$startup->setInstagram($_POST['insta']);


//verficar campos nulos
if ($startup->getCep() == "" ||$startup->getLogradouro() == "" || $startup->getComplemento() == "" || $startup->getBairro() == "" || $startup->getEstado() == ""){
    echo "Campos obrigatorios deixados em branco!";
    return;
}
$startup->alterarEndereco($conexao,$id_pessoa);
header("location: ../../startup/enderecos.php");
