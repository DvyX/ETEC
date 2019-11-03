var numero, result;
numero = parseInt(prompt("Digite um numero"));
result = parseInt(numero%2);

if (!numero){
    alert("Nenhum numero inserido");   
    console.log("Valor nulo");
}
else if(result == 0){
    alert("Numero par!");
    console.log("Numero par!");
}
else{
    alert("Numero impar!"); 
    console.log("Numero impar!");
}