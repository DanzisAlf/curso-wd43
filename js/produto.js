/*cria duas variaveis que buscam os dados da barra*/
var inputTamanho = document.querySelector('[name=tamanho]');
var outputTamanho = document.querySelector('[name=valortamanho]');

/*funcao que recebe o campo do range e joga pro output*/
function mostraTamanho(){
	outputTamanho.value=inputTamanho.value;
}

/*seletor onimput*/
inputTamanho.oninput=mostraTamanho;
