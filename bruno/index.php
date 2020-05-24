<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- css da pagina -->
    <style type="text/css">

    </style>

    <title>Index</title>
    <!-- script jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- script fontawessome(fontes icones) -->
    <script src="https://kit.fontawesome.com/100dc002c3.js" crossorigin="anonymous"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Exemplo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#" id="modal-abrir" data-toggle="modal" data-target="#modal-login"><i
                            class="fas fa-sign-in-alt"></i> Acessar <span class="sr-only">(página atual)</span></a>
            </li>
            <!--  <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Dropdown
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="#">Ação</a>
                 <a class="dropdown-item" href="#">Outra ação</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#">Algo mais aqui</a>
               </div>
             </li> -->
        </ul>
    </div>
</nav>

<!-- modal login -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="position: relative;">
                <img src="https://source.unsplash.com/random/50x50" class="img-fluid"
                     style="border-radius: 100%; margin-top: -25px; position: absolute; left: 45%">

                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 style="text-align:  center;">Faça login da smiles!</h4>

                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="backend/acoes/login.php" class="">
                            <div class="form-row">
                                <div class="col-md-12 mt-3">
                                    <input class="form-control" type="text" id="cpf"
                                           placeholder="Email" name="email">
                                </div>
                                <div class="col-md-12 mt-3">
                                    <input class="form-control" type="password" name="senha" id="senha" placeholder="Senha">
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-danger btn-block mt-3" id="btn-login"
                                           value="Entrar">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <a href="">Esqueceu a senha</a>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <a href="">Ainda não é cadastrado!</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-body" style="background-color: orange">
                <div class="row">
                    <div class="col-md-12">
                        <h6 style="font-style: italic; color: white; background-color: orange">Lorem Ipsum é
                            simplesmente uma simulação de texto da indústria tipográfica e de impressos</h6>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <img src="https://source.unsplash.com/random/100x100" class="img-fluid">
                    </div>
                    <div class="col-md-6  d-flex flex-row flex-wrap align-content-center">
                        <a href="" class="btn btn-danger">Primeiro acesso</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-9 d-flex justify-content-center">
                        <span>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI</span>
                    </div>
                    <div class="col-md-3  d-flex flex-row flex-wrap align-content-center">
                        <a href="" class="btn btn-danger" id="cadastrar">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- fim login modal -->


<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<!-- script da pagina -->
<script type="text/javascript">
    $(function () {
        //desabilita evento padrao do link que abre o modal
        $("#modal-abrir").click(function (event) {
            event.preventDefault();
        });

        $("#cadastrar").click(function (e) {
            e.preventDefault();
            let cpf = $("#cpf");
            let senha = $("#senha");
            if ($(cpf).val() == "" || $(senha).val() == "") {
                alert("Um dos campos(cpf,senha) esta nulo");
            } else {
                window.open("opcoes.php");
            }
        });
    });
</script>
</body>
</html>