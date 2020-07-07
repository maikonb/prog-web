var a;
var b = 4;
let e;
let f = "Ola";

console.log("O valor de a é " + a); // saída "O valor de a é undefined"
console.log("O valor de b é " + b); 
// console.log("O valor de c é " + c); // (ReferenceError)


// Escopo, diferencas entre let e var

if (true) {
  var x = 5;
}
console.log(x); 

if (true) {
  let y = 5;
}

// ReferenceError: y não está definido
// console.log(y); 


// Conceito de Hoisting
// Pode-se utilizar a variável e declará-la depois, sem obter uma exceção

console.log(u === undefined); // exibe "true"
var u = 3;

