function carregar() {
  var msg = window.document.getElementById('msg')
  var img = window.document.getElementById('foto')
  var data = new Date()
  var hora = data.getHours()
  var hora = 1
  msg.innerHTML = `Agora são ${hora} horas!`

  if (hora < 12) {
    window.document.body.style.background = '#FDFCEA'
    img.src = "images/manha.jpg"
    img.alt = "Foto do dia"
  } else if(hora < 18) {
    window.document.body.style.background = '#FCA301'
    img.src = "images/tarde.jpg"
    img.alt = "Foto da tarde"
  } else {
    window.document.body.style.background = '#1E465F'
    img.src = "images/noite.jpg"
    img.alt = "Foto da noite"
  }
}