<?php
//inicia sesao de usario e salva o id dele
session_start();
include_once "../classes/Conexao.php";
include_once "../classes/Pessoa.php";
$banco = new Conexao();
$conexao = $banco->abrir();
$pessoa = new Pessoa();
$pessoa->setEmail($_POST['email']);
$pessoa->setSenha($_POST['senha']);
if (is_null($pessoa->getEmail()) || is_null($pessoa->getSenha())){
    echo "Campos nulos";
    return;
}
$pes = $pessoa->getPessoa($conexao,$pessoa->getEmail(),$pessoa->getSenha(),"id");
if ($pes == 0){
    echo "pesssoa nao existe";
    return;
}
$_SESSION['id'] = $pes;
header("location: ../../opcoes.php");