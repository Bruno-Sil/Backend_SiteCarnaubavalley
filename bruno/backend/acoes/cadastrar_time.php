<?php
session_start();
include_once "../classes/Conexao.php";
include_once "../classes/Startup.php";
$banco = new Conexao();
$conexao = $banco->abrir();
$id_pessoa = $_SESSION['id'];
$startup = new Startup();
//recebe todos ou no minimo um checkbos caso zero ou inexistente recebe 0
$niveis = isset($_POST['nivel'])?$_POST['nivel']:0;
$niveis_finais = "";
//caso nao seja zero ele ler os checkbox marcado
if ($niveis != 0){
    for ($i = 0; $i < count($niveis);$i++){
        if ($i == (count($niveis) - 1) ){
            $niveis_finais .= $niveis[$i];
        }else{
            $niveis_finais .= $niveis[$i]."*";
        }
    }
}else{
    echo "Selcione pelo menos um checkbox!";
    return;
}
$startup->setCargoFuncao($_POST['cargo']);
$startup->setNivelHieraquico($niveis_finais);



//verficar campos nulos
if ($startup->getCargoFuncao() == ""){
    echo "Campos obrigatorios deixados em branco!";
    return;
}
$startup->alterarTime($conexao,$id_pessoa);
header("location: ../../startup/time.php");
