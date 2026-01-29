function getOptions() {
  let fsel = window.document.getElementById('seltable')  
  let array = []
  for (let option of fsel.options) {
    array.push(Number(option.text.split(' ')[1]))
  }
  return array
}


function adicionar() {
  let fnum = window.document.getElementById('num')
  let fres = window.document.getElementById('res')
  let fsel = window.document.getElementById('seltable')
  let array = getOptions()   
  fres.innerHTML = ""

  if (fnum.value.length == 0 || (fnum.value < 1 || fnum.value > 100)) {
    window.alert("Valor inválido ou já encontrado na lista")
  } else { 
    let num = Number(fnum.value)
    if (array.indexOf(num) !=  -1) {
      window.alert("Valor inválido ou já encontrado na lista")
    } else {
      let item = document.createElement('option')
      item.text = `Valor ${num} adicionado!`
      fsel.appendChild(item)
      array.push(num)
    }
  }
  
  if (array.length > 6) {
    fsel.size = array.length
  } else {    
    fsel.size = 6
  }
  fnum.value = ""
  fnum.focus()
}


function finalizar() {  
  let fnum = window.document.getElementById('num')
  let res = window.document.getElementById('res')
  let array = getOptions()
  let len = array.length

  if (len == 0) {    
    window.alert("Adicione valores antes de finalizar!")
    return
  }
  array.sort((a, b) => Number(a) - Number(b))
  let first = array[0]

  let sum = 0
  for (n in array) {
    sum += Number(array[n])
  }

  res.innerHTML = `<p>Ao todo, temos ${len} números cadastrados.</p>`
  if (len > 0) {    
    res.innerHTML += `<p>O maior valor informado foi ${array.pop()}.</p>`
    res.innerHTML += `<p>O menor valor informado foi ${first}.</p>`
    res.innerHTML += `<p>Somando todos os valores, temos ${sum}.</p>`
    res.innerHTML += `<p>A média dos valores digitados é ${(sum/len).toFixed(2).replace(".",",")}.</p>`
  }
  
  fnum.value = ""
  fnum.focus()
}