<?php
session_start();
include_once "../classes/Conexao.php";
include_once "../classes/Startup.php";
$banco = new Conexao();
$conexao = $banco->abrir();
$id_pessoa = $_SESSION['id'];
$startup = new Startup();
$startup->setWebsite($_POST['web']);
$startup->setLinkedin($_POST['link']);
$startup->setFacebook($_POST['face']);
$startup->setAppStore($_POST['store']);
$startup->setGooglePlay($_POST['gplay']);
$startup->setYoutube($_POST['youtube']);
$startup->setInstagram($_POST['insta']);


//verficar campos nulos
if ($startup->getWebsite() == "" || $startup->getLinkedin() == "" ||$startup->getFacebook() == "" || $startup->getAppStore() == "" || $startup->getGooglePlay() == "" || $startup->getYoutube() == "" || $startup->getInstagram() == ""){
    echo "Campos obrigatorios deixados em branco!";
    return;
}
$startup->alterarRede($conexao,$id_pessoa);
header("location: ../../startup/rede.php");
