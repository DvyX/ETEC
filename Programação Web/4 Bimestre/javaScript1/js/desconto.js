var sal, desc, t;
alert("Ola funcionario!");
sal = parseFloat(prompt("Digite seu salario:"));

if(sal<=1751.81){
    desc = parseFloat(sal*0.08);
}
else if(sal > 1751.81 && sal <=2919.72){
    desc = parseFloat(sal*0.09);
}
else if(sal > 2919.72 && sal <= 5839.45){
    desc = parseFloat(sal*0.11);
}
t = parseFloat(sal-desc);
alert("O salario e: "+sal+";  O desconto e: "+desc+";  O salario liquido final sera: "+t);

//O limitador de casas decimais será: (variável) = ().toFixed(número de casas);