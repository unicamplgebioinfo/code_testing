function contar() {
  let fini = window.document.getElementById('ini')
  let fend = window.document.getElementById('end')
  let fstep = window.document.getElementById('step')
  let res = window.document.getElementById('res')
  let ini = Number(fini.value)
  let end = Number(fend.value)
  let step = Number(fstep.value)

  if (step == 0 || (step > 0 && ini > end) || (step < 0 && ini < end)) {
    window.alert("Invalid variables. Values reset!")
    res.innerHTML = "Preparado a contagem..."
    fini.value = 1
    fend.value = 5
    fstep.value = 1
    return
  }

  res.innerHTML = "Contando:<br>"
  for (let i=ini; ((step>0 && i<=end) || (step<0 && i>=end)); i+=step) {
    res.innerHTML += `${i}\u{1F449}` 
  }
  res.innerHTML += "\u{1F3F4}"
}