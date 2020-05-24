<?php
session_start();
include "../classes/Conexao.php";
include_once "../classes/Instituicao.php";
//$_SESSION['id'] equivale ao id pessoa
if(isset($_SESSION['id']) == false){
    echo "faca login para alterar uma instituição";
}

$banco = new Conexao();
$conexao = $banco->abrir();

$instituicao = new Instituicao();
$instituicao->setTipo($_POST['tipo']);
$instituicao->setNome($_POST['nome']);
$instituicao->setEndereco($_POST['endereco']);
$instituicao->setBairro($_POST['bairro']);
$instituicao->setComplemento($_POST['complemento']);
$instituicao->setCidade($_POST['cidade']);
$instituicao->setEstado($_POST['estado']);
$instituicao->setCep($_POST['cep']);
$instituicao->setTelefone($_POST['telefone']);
$instituicao->setEmail($_POST['email']);

if (is_null($instituicao->getTipo()) || $instituicao->getNome() == "" || $instituicao->getEndereco() == "" || $instituicao->getBairro() == "" || $instituicao->getComplemento() =="" || $instituicao->getCidade() =="" || $instituicao->getEstado() == "" || $instituicao->getCep() == "" || $instituicao->getTelefone() =="" || $instituicao->getEmail() == "" ){
    echo "Um dos campos do formulario esta nulo!";
    return;
}

$instituicao->alterar($conexao,$_SESSION['id']);

echo "sucesso!";

