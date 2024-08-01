//SENAC - TAGUATINGA
//PROGRAMAÇAO WEB COM JS
//CONHECENDO VARIAVEIS EM JS


let minhaIdade = 30; //number
let meuNome = "Hudson Neves"// string
let souEstudante = true //bolenan
let valorNulo = null //null
let valorIndefinido; //não vamos atribuir nenhum valor
let minhaDatadeNascimento = new Date (1980,12,1);//object

//ESTRUTURA DE CONTROLE: CONDICIONAIS
let idade2 = 18;
if(idade >=18){
    console.log("Voce pode votar")

}else if (idade ==17){
    console.log("Voce pode votar no proximo ano")
}
let idade = 15;
if(idade > 18){
    console.log("voce pode votar")

}else if(idade == 17){
    console.log("Voce ainda nao pode votar");
}

let dia = 2;
switch(dia){
    case 1:
    console.log("Segunda-feira");
    break;
    default:
        console.log("Dia Invalido");
}





//Estrutura de Controle: loop

for( let i = 0;i < 5; i++){
    console.log(i);
}

let j = 1;
while (i<5){
    console.log(j);
    j++;
}

let i = 0;
do{
    console.log(i);
    i++;

}white(i<5);

//Conversào de tipos de Dados


let num = 10;
let str = '20'
console>log(num + str); // resultara em
'1020' concatenação 
str = Number(str);
console.log(num + str); // resultara em 30 (soma)

//Operadores 
let a = 15;
let b = '5';
let c;

c=a+b;

console.log(c);// resultara em 20

c=a-b;
console.log(c);// Resultara em 10

c=a*b;
console.log(c);//Resultara em 75

c=a/b;
console,log(c)// Resultara em 3


//Funções em JS
function nomeDaFunção(param1, param2, param3){
    //codigo a ser executado
}

function saudação(nome){
    console.log("ola,"= nome +  "!");

}

let cor = "vermelho"// variavel global
function mostrarCor(){
    console.log(cor)
}

function mostrarCarro(){
    let carro = "Ferrari"; // variavel local
    console.log(carro)
}
mostrarCarro()// imprime "Ferari"
console.log(carro);//erro carro is not difine

//const numero = [1,2,3,4,5];
const quadrados = numeros.map(function(n){
    return n*n;
});
console.log(quadrados;//imprime [1,4,9,16,25]
function cumprimentar(callback){
    console.log('ola')
}


