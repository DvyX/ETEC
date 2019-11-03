var graus, fire = 32, convertF, convertC;

alert("Conversão de temperatura, Fahrenheits para Celsius. Tabela no console");

for (graus = 100; graus!=-1; graus--){
   var convertC = parseFloat((graus-fire)*5/9).toFixed(4);
    console.log(graus+" Fahrenheits é igual à: "+convertC+" Graus Celsius");
}
console.log("Tabela de conversão: Fahrenheits para Celsius");

graus = 100; 

for (graus = 100; graus!=-1; graus--){
   var convertF = parseInt((graus*9/5)+fire);
   console.log(graus+" Graus Celsius é igual à: "+convertF+" Fahrenheits");
}
console.log("Tabela de conversão: Celsius para Fahrenheits");
