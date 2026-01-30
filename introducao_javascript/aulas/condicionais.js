let nota1 = Number(window.prompt("Digite sua primeira nota"))
let nota2 = Number(window.prompt("Digite sua segunda nota"))

let res = (nota1 + nota2) / 2
window.alert(`Sua média foi ${res}`)

if(res >= 5) {
  window.alert(`Você foi aprovado. Parabéns pelo resultado!`)
} else {
  window.alert(`Você foi reprovado. Está de recuperação!`)
}