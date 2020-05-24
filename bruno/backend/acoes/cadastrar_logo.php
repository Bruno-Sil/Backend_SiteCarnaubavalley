<?php
session_start();
include_once "../classes/Conexao.php";
include_once "../classes/Startup.php";
$banco = new Conexao();
$conexao = $banco->abrir();
$foto = $_FILES['ft_perfil'];
$id_pessoa = $_SESSION['id'];
if($foto['name'] == ""){
    echo "logo da startup vazio";
    return;
}
$startup = new Startup();
$startup->upload($foto,"../uploads/empresa/",$conexao,$id_pessoa);
header("location: ../../startup/logo.php");