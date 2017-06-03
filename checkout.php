<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Checkout MF</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/checkout.css">
</head>

<body>
  <div class="jumbotron"> <!-- bootstrap -->
    <div class="container"> <!-- bootstrap -->
      <h1>Ótima Escolha</h1>
      <p>Obrigado por escolher a MF</p>
    </div>
  </div>
  <div class="container"> <!-- centralizar -->
    <div class="row"> <!-- bootstrap, para utilizar o col-xx. Ele divide a div em 12 colunas-->
      <!-- montar lista de definicoes, outro tipo alem de ol e ul -->
      <div class="col-sm-4"> <!-- no row, utiliza 4 dos 12 espaços, para telas small-->
        <div class="panel panel-success"> <!-- bootstrap panel-default. opcional panel.success -->
          <div class="panel-heading"> <!-- bootstrap -->
            <h2 class="panel-title">Sua Compra</h2>
          </div>
          <div class="panel-body">
            <img src="img/produtos/foto1-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive"> <!-- bootstrap e escolher a cor com php -->
            <dl>
              <dt>Cor</dt> <!-- definition term -->
              <dd><?= $_POST['cor'] ?></dd>
              
              <dt>Produto</dt>
              <dd><?= $_POST['nome'] ?></dd> 
              
              <dt>Tamanho</dt>
              <dd><?= $_POST['tamanho'] ?></dt>
              
              <dt>Preço</dt>
              <dd><?= $_POST['preco'] ?></dt>
            </dl>
          </div>
        </div>
      </div>
      <form class="col-sm-8"> <!-- utiliza o restante dos 2/3 das colunas-->
        <div class="row"> <!-- faz outra divisao por 12 colunas-->
          <fieldset class="col-md-6"> <!-- cria agrupador. para forms, usa-se fieldset. ajustando classe bootstrap para metade do row-->
            <legend>Dados pessoais</legend>
            
            <div class="form-group"> <!-- bootstrap. formatar grupo-->
              <label for="nome">Nome completo</label> <!-- o campo nome completo recebe FOR nome. todo label é seguido de um input-->
              <input type="text" class="form-control" id="nome" name="nome" autofocus required> <!--required para obrigatorio"   
            </div>  
          
            <div class="form-group"> <!-- bootstrap. formatar grupo-->
              <label for="email">em@il</label> <!-- o campo email recebe FOR email. todo label é seguido de um input-->
              
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="email" class="form-control" id="email" name="email" placeholder="me@myself.com" required>
              </div>
            </div>

            <div class="form-group"> <!-- bootstrap. formatar grupo-->
              <label for="cpf">CPF</label> <!-- o campo cpf recebe FOR cpf. todo label é seguido de um input-->
              <input type="text" class="form-control" id="cpf" name="cpf">
            </div>

    <!-- para checkbox, o bootstrap funciona diferente do anterior -->
            <div class="checkbox">
              <label>
                <input type="checkbox" value="sim" name="spam" checked>
                Quero receber spam
              </label>
            </div>
                
          </fieldset>

          <fieldset class="col-md-6"> <!-- outra metade do row acima do fieldset-->
            <legend>Cartão de crédito</legend>
            <div class="form-group">
              <label for="numero-cartao">Número-cvv</label>
              <input type="text" class="form-control" id="numero-cartao" name="nome-cartao" placeholder="0000.0000.0000.0000-000">
            </div>
            
            <!-- incluir um dropdown usando select no lugar de type-->
            <div class="form-group">
              <label for="bandeira-cartao">Bandeira</label>
              <select name="bandeira-cartao" class="form-control" id="bandeira=cartao" name="bandeira-cartao">
                <option value="master">MasterCard</option>
                <option value="visa">Visa</option>
                <option value="amex">American Express</option>
              </select>
            </div>
          </fieldset>
        </div>
          <button type="submit" class="btn btn-primary btn-lg pull-right"> <!-- classe bootstrap para botoes-->
            <span class="glyphicon glyphicon-thumbs-up"></span>
            Confirmar Pedido
          </button>
      </form> 
        
    </div>    
  </div>
</body>
</html>

