// let num = {34:2, 12:1, 35:3, 23:2}
let num = [34, 12, 35, 23]
num[9] = 2

console.log(num)
console.log(`O vetor tem ${num.length} posições!`)

console.log("Incluindo o valor 5")
num.push(5)

console.log("sort padrão:")
num.sort()
console.log(num)

console.log("sort number:")
num.sort((a,b)=> Number(a)-Number(b))
console.log(num)

console.log("For in retorna os índices de posições ocupadas:")
for (let pos in num) {
  console.log(pos)  
}

console.log("For each retorna índices e valores:")
num.forEach((val, i) => console.log(i + " " + val))

i = num.indexOf(12)
console.log("O índice de 12 é:")
console.log(i + " valor é " + num[i])

i = num.indexOf(15)
console.log("Não existe 15, index = " + i)