<?php
include "../classes/Conexao.php";
include_once "../classes/Pessoa.php";
include_once "../classes/Startup.php";
 $banco = new Conexao();
 $con = $banco->abrir();
// print_r($con);
 $foto = $_FILES['foto'];
// print_r($_POST);

 $pessoa = new Pessoa();
 if(!isset($_POST['sexo']) || $_FILES['foto']['name'] == ""){
    echo "Campo sexo nao marcado ou foto nao colocada!";
    return;
 }
 $pessoa->setNomeCompleto($_POST['nome']." ".$_POST['sobrenome']);
 $pessoa->setSexo($_POST['sexo']);
 $pessoa->setDataNascimento($_POST['data']);
 $pessoa->setTelefoneWhatsapp($_POST['telefone']);
 $pessoa->setEstado($_POST['estado']);
 $pessoa->setCidade($_POST['cidade']);
 $pessoa->setCategoria($_POST['categoria']);
 $pessoa->setEmail($_POST['email']);
 $pessoa->setConfirmacaoEmail($_POST['conf_email']);
 $pessoa->setSenha($_POST['senha']);
 $pessoa->setConfirmacaoSenha($_POST['conf_senha']);

 //verficar campos nulos

if ($pessoa->getNomeCompleto() =="" || $pessoa->getSexo() =="" || $pessoa->getDataNascimento() =="" || $pessoa->getTelefoneWhatsapp() =="" || $pessoa->getEstado() =="" || $pessoa->getCidade() =="" || $pessoa->getCategoria() =="" || $pessoa->getEmail() =="" || $pessoa->getSenha() ==""){
    echo "Voce deixou um campo nulo";
    return;
}else if(($pessoa->getEmail() != $pessoa->getConfirmacaoEmail()) || ($pessoa->getSenha() != $pessoa->getConfirmacaoSenha())){
    echo "Confirmaão de senha ou email estão diferentes";
    return;
}

//cadastrar pessoa
$id =  $pessoa->cadastrar($con);
$pessoa->setIdPessoa($id);
$pessoa->upload($foto,"../uploads/pessoas/",$con);
$startup = new Startup();
$startup->startStartup($con,$pessoa->getIdPessoa());
echo "sucesso";




