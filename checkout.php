<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Checkout MF</title>
  <meta name="viewport" content="width=device-width">
</head>

<body>
  <h1>Ótima Escolha</h1>
  <p>Obrigado por escolher a MF</p>
  
  <!-- montar lista de definicoes, outro tipo alem de ol e ul -->
  <h2>Sua Compra</h2>
  
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
  
    
</body>
</html>

