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

//arrays para população de campos selects
$modelos_de_negocio = array("E-commerce", "Hardware", "Marketplace", "Licenciamento", "Venda de dados", "API", "Outros", "Consumer", "Saas",);
$publico_alvo = array("B2s", "B2B2C", "B2B", "B2G", "B2C", "P2P");
$momento = array("Ideação", "Operação", "Tração", "Scaleup", "Fora de Operação");
$segmento = array("Segurança a defesa", "Recursos Humanos", "HardWare", "Logistica e Mobilidade Urbana", "Seguros", "Energia", "Cloud Computing", "Produtos de consumo", "Meio Ambiente", "Automobilismo", "Mobile", "Direito", "Pets", "Advertising", "Eventos e Turismo", "NanoTecnologia", "Construção Civil", "Industria", "Imobiliaria", "Finanças", "Educação", "Infantil", "Biotecnologia", "Esportes", "TIC e Telecom", "Transporte", "Agronegocio", "Vendas e Markenting", "E-commerce", "Desenvolvimento de Software", "Recrutamento", "Gestão", "Big Data", "Vidio", "Casa e Familia", "Games", "Moda e Beleza", "CRM", "Outros", "Internet", "Saude e Bem-estar");
$segmento_secundario = $segmento;
$tamanho = array("1-5", "6-10", "11-20", "21-50", "51-100", "101-200", "201-500", "501-1000", "1001-5000", "5001+");
$faturamento = array("0", "1 a 50 mil", "50 a 250 mil", "250 a 500 mil", "500 mil a 1 milhão", "1 a 2,5 milhões", "2,5 a 5 milhões", "+5 milhões");
//Fim dos arrays para população de campos selects

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Custom styles for this template -->
    <link href="simple-sidebar.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Startup</title>

    <style type="text/css">
        body {
            background-color: #f2f2f2;
        }

        div#qr {
            float: left;
        }

        .imagens {
            max-width: 400px;
            max-height: 400px;
            min-width: 20px;
            min-height: auto;
        }

        @media (max-width: 1020px) {
            div#qr {
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
        <div class="sidebar-heading">Minha Startup</div>
        <div class="list-group list-group-flush">
            <a href="logo.php" class="list-group-item list-group-item-action bg-light">Logo</a>
            <a href="dados_gerais.php" class="list-group-item list-group-item-action bg-light">Dados Gerais</a>
            <a href="descricoes.php" class="list-group-item list-group-item-action bg-light">Sobre</a>
            <a href="dados.php" class="list-group-item list-group-item-action bg-dark text-primary">Dados do Negócio</a>
            <a href="rede.php" class="list-group-item list-group-item-action bg-light">Redes Sociais</a>
            <a href="enderecos.php" class="list-group-item list-group-item-action bg-light">Endereços</a>
            <a href="time.php" class="list-group-item list-group-item-action bg-light">Time</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Abrir/Fechar</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <h3>Sobre o Negócio</h3>
                        <h6>Conte um pouco sobre o momento da sua startup</h6>
                    </div>

                    <!-- <div style="clear: both;"></div> -->


                    <div class="row d-flex justify-content-center">
                        <div class="col-md-9 d-flex justify-content-end ml-5">
                            <form method="post" action="../backend/acoes/cadastrar_dados.php">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label>Modelos de Negócio</label>
                                        <select name="modelo" id="" class="custom-select">
                                            <option value="">Selecione o modelo</option>
                                            <?php foreach ($modelos_de_negocio as $m) { ?>
                                                <option value="<?php echo $m ?>" <?php echo ($start->getModeloNegocio() == $m)?"selected='selected'":"" ?> ><?php echo $m ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label>Publico-alvo</label>
                                        <select name="publico" id="" class="custom-select">
                                            <option value="">Selecione o publico</option>
                                            <?php foreach ($publico_alvo as $p) { ?>
                                                <option value="<?php echo $p ?>" <?php echo ($start->getPublicoAlvo() == $p)?"selected='selected'":"" ?>><?php echo $p ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label>Momento</label>
                                        <select name="momento" id="" class="custom-select">
                                            <option value="">Selecione o momento</option>
                                            <?php foreach ($momento as $m) { ?>
                                                <option value="<?php echo $m ?>" <?php echo ($start->getMomento() == $m)?"selected='selected'":"" ?>><?php echo $m ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label>Segmento Principal</label>
                                        <select name="sp" id="" class="custom-select">
                                            <option value="">Selecione o segmento principal</option>
                                            <?php foreach($segmento as $s){ ?>
                                                <option value="<?php echo $s ?>" <?php echo ($start->getSegmentoPricipal() == $s)?"selected='selected'":"" ?>><?php echo $s ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label>Segmento Secundario</label>
                                        <select name="ss" id="" class="custom-select">
                                            <option value="">Selecione o segmento secundario</option>
                                            <?php foreach($segmento_secundario as $s){ ?>
                                                <option value="<?php echo $s ?>" <?php echo ($start->getSegmentoSecundario() == $s)?"selected='selected'":"" ?>><?php echo $s ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label>Tamanho do time</label>
                                        <select name="time" id="" class="custom-select">
                                            <option value="">Selecione o tamanho do time</option>
                                            <?php foreach($tamanho as $t){ ?>
                                                <option value="<?php echo $t ?>" <?php echo ($start->getTamanhoTime() == $t)?"selected='selected'":"" ?>><?php echo $t ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label>Faturamento Anual</label>
                                        <select name="faturamento" id="" class="custom-select">
                                            <option value="">Selecione o Faturamento Anual</option>
                                            <?php foreach($faturamento as $f){ ?>
                                                <option value="<?php echo $f ?>" <?php echo ($start->getFaturamentoAnual() == $f)?"selected='selected'":"" ?>><?php echo $f ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <input type="submit" name="" value="Salvar e continuar"
                                               class="mr-2 ml-2 btn btn-outline-primary">
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
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        });
    </script>
</body>
</html>