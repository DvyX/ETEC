var base, expoente, resultado = 1, total;

alert("Potenciação JavaScript");

base = parseInt(prompt("Insira o valor da base"));

expoente = parseInt(prompt("Insira o valor do expoente"));


for (i = 0; i<expoente; i++){
    resultado = base*resultado;
}
alert("O resultado da potenciação é: "+resultado);
