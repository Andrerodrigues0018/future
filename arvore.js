
//discos = 3;
log = "";
arvore = "";
cont = 0;
var vetorNome = new Array("A","B","C"); 

var vetor =new Array("A","B","C");

for (var i = 0; i < vetor.length; i++) {
	vetor[i] = new Array();
	//console.log(vetor[i]);
}




function move_disco(discos,origem,destino,aux) {
	cont++;
	/*for (var i = 1; i <= qtddiscos; i++) {
		vetor[0][1].push(qtddiscos-1);
		console.log("A:" vetor[0]);
	}*/


	console.log("-------"+cont+"------")
	
	if((discos-qtddiscos)==1){
		vetor[vetorNome.indexOf(origem)].pop();
		vetor[vetorNome.indexOf(destino)].push((discos));
	}else{

		vetor[vetorNome.indexOf(origem)].pop();
		vetor[vetorNome.indexOf(destino)].push((discos-qtddiscos)+1);

	}
	/*else{
		vetor[vetorNome.indexOf(aux)].pop();
		vetor[vetorNome.indexOf( origem)].push((qtddiscos - discos)+1);


		vetor[vetorNome.indexOf(aux)].pop();
		vetor[vetorNome.indexOf(destino)].push((qtddiscos - discos)+1);
	}*/

			for (var i = 0; i < vetor.length; i++) {
				
				console.log(i+":"+vetor[i]);
			}
	


	if(discos == 1){
		
		console.log("if 1");;
		log += "> Mover disco "+discos+" de "+origem+" para "+destino+"<br>";
		
	}else{
		
		console.log("if 2");
		move_disco(discos-1,origem,aux,destino);
		log += "> Mover disco "+discos+" de "+origem+" para "+destino+"<br>";
		move_disco(discos-1,aux,destino,origem);
		
	}
}




function zerarTabela(){
	log = "<h2> SIMPLIFICADO </h2>";
	arvore = "<h2> POSSIBILIDADES </h2>";
	discos = parseInt($( "#input" ).val());
	qtddiscos = discos;
	for (var i = 0; i < qtddiscos; i++) {
		//vetor[i] = new Array();
		vetor[0].push(qtddiscos-i);
		
	}

	console.log("-------"+cont+"------")
	for (var i = 0; i < vetor.length; i++) {
		//vetor[i] = new Array();

		console.log(i+":"+vetor[i]);
	}
	move_disco(discos,'A','C','B');
	document.getElementById("result").innerHTML = log;
	document.getElementById("result2").innerHTML = arvore;
	
}

$( "#input" ).keypress(function( event ) {
if ( event.which == 13 ) {
     zerarTabela();
  }
});