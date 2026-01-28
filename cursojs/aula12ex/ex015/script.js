function verificar() {
  var fano = window.document.getElementById('ano')
  var radsex = window.document.getElementsByName('radsex')
  var res = window.document.getElementById('res')

  var data = new Date()
  var anoAtual = data.getFullYear()
  var idade = anoAtual - Number(fano.value)
  if (fano.value.length == 0 || idade < 0 || idade > 125) {
    window.alert("Verifique os dados e tente novamente!")
  }
 
  var src = ""
  var genero = ""
  var etapa = etapaEtaria(idade)
  if (radsex[0].checked) {
    genero = "homem"
    if (etapa.length > 0) {
      src = etapa + "_masc.jpg"
    }
  } else if(radsex[1].checked) {
    genero = "mulher"
    if (etapa.length > 0) {
      src = etapa + "_fem.jpg"
    }
  }

  res.innerHTML = `<p>Detectamos ${genero} com idade ${idade} anos!</p>`  
  if (src.length > 0) {
    var img = document.createElement('img')
    img.setAttribute('id', 'foto')
    img.setAttribute('src', `images/${src}`)
    res.appendChild(img)
    // res.innerHTML += `<img src="images/${src}"/>`
  }
}


function etapaEtaria(idade) {
  etapa = ""
  if (idade < 0) {
    etapa = ""
  } else if (idade < 18) {
    etapa = "crianca"
  } else if (idade < 60) {
    etapa = "jovem"
  } else if (idade < 125) {
    etapa = "idoso"
  }
  return etapa
}