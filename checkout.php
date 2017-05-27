<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Checkout MF</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
  <div class="jumbotron"> <!-- bootstrap -->
    <div class="container"> <!-- bootstrap -->
      <h1>Ótima Escolha</h1>
      <p>Obrigado por escolher a MF</p>
    </div>
  </div>
  <div class="container"> <!-- centralizar -->
    <!-- montar lista de definicoes, outro tipo alem de ol e ul -->
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
</body>
</html>

