<!DOCTYPE html>
<?php
session_start();
include_once "../backend/classes/Conexao.php";
include_once "../backend/classes/Startup.php";
if (!isset($_SESSION['id'])) {
    echo "faca login para cadastrar uma instituição";
    return;
}
$banco = new Conexao();
$conexao = $banco->abrir();
$id_pessoa = $_SESSION['id'];
$start = new Startup();
$start->consultarStartup($conexao,$id_pessoa);
?>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Custom styles for this template -->
    <link href="simple-sidebar.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Startup</title>

    <style type="text/css">
        body{
            background-color: #f2f2f2;
        }
        div#qr{
            float: left;
        }
        .imagens{
            max-width: 400px;
            max-height: 400px;
            min-width: 20px;
            min-height: auto;
        }

        @media (max-width: 1020px) {
            div#qr{
                float: none;
            }
        }
    </style>
    <!-- script jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- script fontawessome(fontes icones) -->
    <script src="https://kit.fontawesome.com/100dc002c3.js" crossorigin="anonymous"></script>
</head>
<body>



<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Minha Startup </div>
        <div class="list-group list-group-flush">
            <a href="logo.php" class="list-group-item list-group-item-action bg-light">Logo</a>
            <a href="dados_gerais.php" class="list-group-item list-group-item-action bg-light">Dados Gerais</a>
            <a href="descricoes.php" class="list-group-item list-group-item-action bg-light">Sobre</a>
            <a href="dados.php" class="list-group-item list-group-item-action bg-light">Dados do Negócio</a>
            <a href="rede.php" class="list-group-item list-group-item-action bg-dark text-primary">Redes Sociais</a>
            <a href="enderecos.php" class="list-group-item list-group-item-action bg-light">Endereços</a>
            <a href="time.php" class="list-group-item list-group-item-action bg-light">Time</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Abrir/Fechar</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="../backend/acoes/logout.php">Sair <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>



        <div class="container">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-11" style="background-color: white">

                    <div id="qr">
                        <h3>Redes sociais</h3>
                        <h6>Diga em quais canais parceiros e amigos podem encontrar sua startup</h6>
                    </div>

                    <!-- <div style="clear: both;"></div> -->



                    <div class="row d-flex justify-content-center">
                        <div class="col-md-9 d-flex justify-content-end ml-5">
                            <form method="post" action="../backend/acoes/cadastrar_rede.php">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label>WebSite</label>
                                        <input type="text" value="<?php echo $start->getWebsite()?>" name="web" class="form-control">
                                    </div>

                                    <div class="col-md-12">
                                        <label>Linkdin</label>
                                        <input type="text" value="<?php echo $start->getLinkedin()?>" name="link" class="form-control" placeholder="Associação Brasileira...">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Facebook</label>
                                        <input type="text" value="<?php echo $start->getFacebook()?>" name="face" class="form-control" placeholder="81.309">
                                    </div>
                                    <div class="col-md-12">
                                        <label>AppStore</label>
                                        <input type="text" value="<?php echo $start->getAppStore()?>" name="store" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-md-12">
                                        <label>GooglePlay</label>
                                        <input type="text" value="<?php echo $start->getGooglePlay()?>" name="gplay" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Youtube</label>
                                        <input type="text" value="<?php echo $start->getYoutube()?>" name="youtube" class="form-control" placeholder="email@exemplo.com">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Instagram</label>
                                        <input type="text" value="<?php echo $start->getInstagram()?>" name="insta" class="form-control" placeholder="">
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <input type="submit" name="" value="Salvar e continuar" class="mr-2 ml-2 btn btn-outline-primary">
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>




    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- script da pagina -->
    <script type="text/javascript">
        $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });


            $("#ft_perfil").change(function(e) {
                let files = $(this)[0].files[0];
                //pra saber quais atributos de file(tamanho,tipo etc de um console log)
                // console.log(files);
                let fileReader = new FileReader();
                fileReader.onloadend = function(){
                    //fileReader.result tem url final da img
                    $("#img-pv").append("<img src='"+fileReader.result+"' class='img-fluid imagens'>");
                }
                fileReader.readAsDataURL(files);

            });
        });
    </script>
</body>
</html>