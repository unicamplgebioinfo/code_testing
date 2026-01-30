
// Acessando via ID
let titulo = window.document.getElementById("titulo1")
// Acessando via Class
let titulo2 = window.document.getElementsByClassName("titulo2")
// Acessando via Tag
// let tags = window.document.getElementsByTagName("h1")

// console.log(titulo)
// console.log(titulo2)
// console.log(tags)

titulo.innerHTML = "NOVO TITULO JAVASCRIPT"

// CRIAR NOVO ELEMENTO
let novoElemento = document.createElement("h2")
novoElemento.innerHTML = "Novo Element h2"
document.body.appendChild(novoElemento)

titulo2[0].remove()