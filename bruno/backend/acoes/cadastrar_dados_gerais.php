<?php
session_start();
include_once "../classes/Conexao.php";
include_once "../classes/Startup.php";
$banco = new Conexao();
$conexao = $banco->abrir();
$id_pessoa = $_SESSION['id'];
$startup = new Startup();
$startup->setNome($_POST['nome']);
$startup->setRazaoSocial($_POST['razao']);
$startup->setCnpj($_POST['cnpj']);//valor op
$startup->setEmail($_POST['email']);
$startup->setDataFundacao($_POST['dia']);
$startup->setTelefone($_POST['telefone']);//valor op
//verficar campos nulos
if ($startup->getNome() == "" || $startup->getRazaoSocial() == "" || $startup->getEmail() == "" || $startup->getDataFundacao() == ""){
    echo "Campos obrigatorios deixados em branco!";
    return;
}
$startup->alterarDadosGerais($conexao,$id_pessoa);
header("location: ../../startup/dados_gerais.php");