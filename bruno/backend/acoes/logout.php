<?php
//tira sessao(login) de usuario
session_start();
session_destroy();
header("location: ../../index.php");
