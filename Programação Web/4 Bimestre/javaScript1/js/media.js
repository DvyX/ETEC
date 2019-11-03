var nome, n1,n2,n3,n4 , media;
nome = prompt("Digite seu nome");
alert("Ola "+nome);

n1 = parseFloat(prompt("Digite a primeira nota"));
n2 = parseFloat(prompt("Digite a segunda nota"));
n3 = parseFloat(prompt("Digite a terceira nota"));
n4 = parseFloat(prompt("Digite a quarta nota"));


media = parseFloat((n1+n2+n3+n4)/4);


if(media>=0 && media<=3.0){
alert(nome+", sua media e: "+media+", voce foi retido");
}
else if(media>3.0 && media<=5.9){
alert(nome+", sua media e: "+media+", voce esta em exame");   
}
else if (media>5.9 && media<=10.0){
alert(nome+", sua media e: "+media+", parabens, voce foi promovido!");       
}

