var val1, val2, term, confirmar=0;


alert("Série de fibonacci JavaScript");

term = parseInt(prompt("Digite o enésimo termo para a série:"));

alert("Resultado no console");
 console.log("A série até o termo "+term+" é: ");
       
for(val1= 1, val2= 1, confirmar;val1<term && confirmar<term;){
    console.log(val2+","+val1);
    confirmar = val1+val2;
    var val2 = val1 + val2;
    var val1 = val1 + val2;
}
console.log("..."+term);
    