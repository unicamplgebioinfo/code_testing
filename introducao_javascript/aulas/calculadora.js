function somar(a, b) {
  return a + b
}

function subtrair(a, b) {
  return a - b
}

function multiplicar(a, b) {
  return a * b
}

function dividir(a, b) {
  return a / b
}

let n1 = Number(window.prompt("Insira o primeiro número a ser calculado:"))
let n2 = Number(window.prompt("Insira o segundo número a ser calculado:"))
let op = window.prompt("Escolha a operação, digite:\n1 para somar\n2 para subtrair\n3 para multiplicar\n4 para dividir")

let res = 0
switch(op) {
  case "1":
    res = somar(n1, n2)
    break
  case "2":
    res = subtrair(n1, n2)
    break
  case "3":
    res = multiplicar(n1, n2)
    break
  case "4":
    res = dividir(n1, n2)
    break
  default:
    res = 0
}

window.alert(`O resultado da operação é ${res}`)