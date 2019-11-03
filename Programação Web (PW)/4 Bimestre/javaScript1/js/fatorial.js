var fatorial, resultado, i;

alert("Fatorial em java script");

fatorial = parseInt(prompt("Digite um valor numérico:"));

i = fatorial-1;

resultado = fatorial;

console.log("Os valores do fatorial de "+fatorial+" são: ");

for (i; i!=0;i--){
    resultado = resultado*i;
}
alert("O resultado do fatorial de "+fatorial+" é: "+resultado+". Os valores estão no console!");

i = fatorial;

while(i!=0){
    console.log(i);
    i--;
    if(i>0){
        console.log("x");
    }
}
console.log(fatorial+"! = "+resultado);
