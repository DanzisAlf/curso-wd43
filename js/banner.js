/* cria um array com as imagens*/
var banners=["../img/destaque-home.png", "../img/destaque-home-2.png"];
var bannerAtual = 0;
/*faz a funcao de troca de imagem pela posicao do array. no caso o array e dois
caso fosse 3, %3, ou 4, %4*/

function trocaBanner(){
	bannerAtual=(bannerAtual+1) % 2;
	document.querySelector('.destaque img').src = banners[bannerAtual];
}
setInterval(trocaBanner, 4000);
