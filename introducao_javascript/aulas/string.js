// Declarando variável string
let string = "texto"

// Concatenar strings
let msg1 = "Olá"
let msg2 = "Seja bem vinda"
let concatenar = msg1 + ". " + msg2
console.log(concatenar)

let pessoa = "Giulia"
let texto = concatenar + ", " + pessoa + "!"
console.log(texto)

let msg = `${msg1}, ${pessoa}. ${msg2}!`
console.log(msg)

let usuario = window.prompt("Qual seu nome?")
window.alert(`${usuario} ${msg2}!`)