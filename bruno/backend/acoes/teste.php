<?php
//arquivo de teste de api
//troque a url para testes
//acesse http://localhost/projetos/bruno/backend/acoes/teste.php
$json_file = file_get_contents("http://localhost/projetos/bruno/backend/acoes/consultar_all_startups.php");
//vira um objeto, meio de acesso objeto->atributo
$json_file = json_decode($json_file);

//exemplo ler json decode

//foreach ($json_file as $j){
//    echo $j->id."<br>";
//}

print_r($json_file);

?>
<!--teste de requisao post-->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<form method="post" action="consultar_one_startup.php">-->
<!--    <input type="text" name="id_pessoa" value=""><br>-->
<!--    <input type="submit" value="POST">-->
<!--</form>-->
<!--</body>-->
<!--</html>-->
