	    <?php
	      $cabecalho_title = "Produto da Mirror fashion";
	      include("cabecalho.php");
	    ?>
	    <?php
	      $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
	    ?>

	    <section class="produto">
	      <h1>Fuzzy Cardigan</h1>
	      <por> apenas R$129,90</p>
	      
	      <form>
	        <fieldset class="cores">
	          <legend>Escolha a cor:</legend>
	          <input type="radio" name="cor" value="verde" id="verde" checked>
	          <label for="verde">
	            <img src="img/produtos/foto2-verde.png" alt="verde">
	          </label>
	          
	          <input type="radio" name="cor" value="rosa" id="rosa">
	          <label for="rosa">
	            <img src="img/produtos/foto2-rosa.png" alt="rosa">
	          </label>
	          
	          <input type="radio" name="cor" value="azul" id="azul">
	          <label for="azul">
	            <img src="img/produtos/foto2-azul.png" alt="azul">
	          </label>
	        </fieldset>
	        
	        <input type="submit" class="comprar" value="Comprar">
	      </form>
	    </section>

	    <?php include("rodape.php");?>
	  </body>
</html>
