 <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Pessoa</title>
    <style type="text/css">
      img.imagens{
        max-width: 300px;
        max-height: 300px;
      }
    </style>
    <!-- script jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- script fontawessome(fontes icones) -->
    <script src="https://kit.fontawesome.com/100dc002c3.js" crossorigin="anonymous"></script>
  </head>
  <body>

      <div class="container">
        <h1 style="text-align: center;">Cadastrar Pessoa</h1>
        <div class="row">
          <div class="col-md-12">
              <form method="post" action="backend/acoes/cadastrar_pessoa.php" id="form-pessoa" enctype="multipart/form-data">
                <!-- previw da img -->
                <div class="form-row">
                  <div class="col-md-12 d-flex justify-content-lg-center" id="preview-img">

                </div>
                <div class="col-md-12">
                  <label>Escolha a foto do perfil</label>
                  <div class="custom-file">
                    <input type="file" value="" name="foto" class="custom-file-input" id="ft_perfil">
                    <label data-browse="Upload" class="custom-file-label" for="customFile">Escolher arquivo</label>
                  </div>
                </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6">
                  <label>Nome</label>
                  <input type="text" name="nome" class="form-control">
                </div>

                <div class="col-md-6">
                  <label>Sobrenome</label>
                  <input type="text" name="sobrenome" class="form-control">
                </div>
                </div>

                 <div class="form-row">
                        <div class="col-md-6">
                          <label style="display: block;">Selecione o sexo</label>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadioInline1" name="sexo" class="custom-control-input" value="masculino">
                              <label class="custom-control-label" for="customRadioInline1">Masculino</label>
                            </div>


                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadioInline2" name="sexo" class="custom-control-input" value="Feminino">
                              <label class="custom-control-label" for="customRadioInline2">Femenino</label>
                            </div>
                        </div>
                    <div class="col-md-6">
                      <label>Data Nascimento</label>
                      <input type="date" class="form-control" name="data">
                    </div>
                 </div>

                <div class="form-row">

                  <div class="col-md-12">
                    <label>Telefone</label>
                    <input type="text" class="form-control" name="telefone">
                  </div>
                </div>


                <div class="form-row">

                  <div class="col-md-6">
                    <label>Estado</label>
                    <input type="text" class="form-control" name="estado">
                  </div>
                  <div class="col-md-6">
                    <label>Cidade</label>
                    <input type="text" class="form-control" name="cidade">
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label>Categoria</label>
                      <input type="text" name="categoria" class="form-control" list="nomes">
                      <datalist id="nomes">
                        <option value="Empresario"></option>
                        <option value="Estudante"></option>
                        <option value="Professor"></option>
                        <option value="Investidor"></option>
                      </datalist>
                    </div>
                  </div>
                <div class="form-row">

                  <div class="col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="col-md-6">
                    <label>Confirmar Email</label>
                    <input type="email" class="form-control" name="conf_email">
                  </div>
                </div>

                <div class="form-row">

                  <div class="col-md-6">
                    <label>Senha</label>
                    <input type="password" id="senha" class="form-control" name="senha">
                  </div>
                  <div class="col-md-6">
                    <label>Confirmar Senha</label>
                    <input type="password" id="conf_senha" class="form-control" name="conf_senha">
                  </div>
                </div>

                <div class="form-row">
                   <div class="col-md-12 mt-4 mb-4">
                    <input type="submit" name="" value="Cadastrar" class="btn btn-primary btn-block">
                  </div>
                </div>
              </form>
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
          $("#ft_perfil").change(function(e) {
            let files = $(this)[0].files[0];
            //pra saber quais atributos de file(tamanho,tipo etc de um console log)
            // console.log(files);
            let fileReader = new FileReader();
            fileReader.onloadend = function(){
              //fileReader.result tem url final da img
              $("#preview-img").append("<img src='"+fileReader.result+"' class='img-fluid img-thumbnail imagens'>");
            }
            fileReader.readAsDataURL(files);

          });
          // $("#form-pessoa").submit(function(e) {
          //     e.preventDefault();


          // });
      });
    </script>
  </body>
</html>