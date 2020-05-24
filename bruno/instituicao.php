<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['id'])){
    echo "faca login para cadastrar uma instituição";
    return;
}
?>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>instituição</title>
    <style type="text/css">
      
    </style>
    <!-- script jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- script fontawessome(fontes icones) -->
    <script src="https://kit.fontawesome.com/100dc002c3.js" crossorigin="anonymous"></script>
  </head>
  <body>
    
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 style="text-align: center;">Cadastrar Instituição</h1>
            <form action="backend/acoes/cadastrar_insituicao.php" method="post">
              <div class="form-row">
                <div class="col-md-12">
                  <label>Slecione o Tipo:</label>
                  <select class="custom-select" name="tipo">
                    <option value="Sistema S">Sistema S</option>
                    <option value="Faculdade/Universidade">Faculdade/Universidade</option>
                    <option value="Orgao Publico">Orgão Publico</option>
                    <option value="Coworking">Coworking</option>
                    <option value="Associacao">Associação</option>
                    <option value="Aceladora">Aceladora</option>   
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <label>Nome</label>
                  <input type="text" class="form-control" name="nome">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4">
                  <label>Endereço</label>
                  <input type="text" class="form-control" name="endereco">
                </div>
                <div class="col-md-4">
                  <label>Bairro</label>
                  <input type="text" class="form-control" name="bairro">
                </div>
                <div class="col-md-4">
                  <label>Complemento</label>
                  <input type="text" class="form-control" name="complemento">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4">
                  <label>Cidade</label>
                  <input type="text" class="form-control" name="cidade">
                </div>
                <div class="col-md-4">
                  <label>Estado</label>
                  <input type="text" class="form-control" name="estado">
                </div>
                <div class="col-md-4">
                  <label>Cep</label>
                  <input type="text" class="form-control" name="cep">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6">
                  <label>Telefone</label>
                  <input type="text" class="form-control" name="telefone">
                </div>
                <div class="col-md-6">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <input type="submit" name="" value="Cadastrar" class="btn btn-block btn-primary">
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
       
      });
    </script>
  </body>
</html>