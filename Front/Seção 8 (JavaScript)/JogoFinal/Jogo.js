var altura = 0;
var largura = 0;
var vidas = 1;
var tempo = 10;

var criaManoelTempo = 1500;

var dificuldade = window.location.search
dificuldade = dificuldade.replace('?','')

if(dificuldade === 'normal'){
    criaManoelTempo = 1500;
}else if(dificuldade === 'dificil'){
    criaManoelTempo = 1000;
}else if(dificuldade === 'impossivel'){
    criaManoelTempo = 750;
}

function ajustaTamanhoPalcoJogo(){
    altura = window.innerHeight;
    largura = window.innerWidth;
}

ajustaTamanhoPalcoJogo();
var cronometro = setInterval(function(){
    tempo -= 1;
    if(tempo < 0){
        clearInterval(cronometro)
        clearInterval(criaManoel)
        window.location.href = 'vitoria.html';
    }else{
        document.getElementById('cronometro').innerHTML = tempo;
    }
    
},1000);

function posicaoRandomica(){

    //Remover manoel anterior caso ele exista
    if(document.getElementById('manoel')){
        document.getElementById('manoel').remove()

        if(vidas>3){
            window.location.href = 'fim_de_jogo.html';
        }else{
            document.getElementById('v' + vidas).src = 'imagens/coracao_vazio.png';
            vidas++;
        }
    }

    var posicaoX = Math.floor(Math.random() * largura) - 90;
    var posicaoY = Math.floor(Math.random() * altura) - 90;

    //A posição é menor que 0? Se sim, a posição é 0
    posicaoX = posicaoX < 0 ? 0 : posicaoX;
    posicaoY = posicaoY < 0 ? 0 : posicaoY;
    
    
    var manoel = document.createElement('img');
    manoel.src = 'imagens/foto-manoel-sem-fundo2.png';
    manoel.className = tamanhoAleatorio() + ' ' + ladoAleatorio();
    manoel.style.left = posicaoX + 'px';
    manoel.style.top = posicaoY + 'px';
    manoel.style.position = 'absolute';
    manoel.id = 'manoel'
    manoel.onclick = function(){
        this.remove()
    }
    
    document.body.appendChild(manoel);

}

function tamanhoAleatorio(){
    var classe = Math.floor(Math.random() * 3);
    switch(classe){
        case 0:
            return 'manoel1'
        case 1:
            return 'manoel2'
        case 2:
            return 'manoel3'
    }
}

function ladoAleatorio(){
    var lado = Math.floor(Math.random() * 2);
    switch(lado){
        case 0:
            return 'ladoA'
        case 1:
            return 'ladoB'
    }
}