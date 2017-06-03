/*acessa  conteudo do documento e o valor queryselector*/

var $input_quantidade = document.querySelector("#qt"); /*olhar o arquivo checkout este id*/
var $output_total = document.querySelector("#total");

$input_quantidade.oninput = function(){
	var preco = document.querySelector("#preco").textContent; /*pois o dd manda string*/
	preco = preco.replace("R$ ", "");
	preco = preco.replace(",", ".");
	preco = parseFloat(preco);  /*transforma em float*/
	
	var quantidade = $input_quantidade.value; /*pega o valor do campo*/
	var total = quantidade * preco;
	total = "R$ " + total.toFixed(2) /*deixa o float 2 casas decimais e converte pra string*/
	total = total.replace(".", ",");
	
	$output_total.value = total;
}
