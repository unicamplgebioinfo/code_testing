function gerarTabuada() {
  let fnum = window.document.getElementById('num')
  let ftab = window.document.getElementById('seltab')
  
  ftab.innerHTML = ""
  if (fnum.value.length == 0) {
    window.alert("Invalid empty value!")    
    ftab.innerHTML =  "<option>Digite um número acima</option>"
  } else { 
    let num = Number(fnum.value)

    for (var i=1; i<=10; i++) {
      let item = document.createElement('option')
      item.text = `${num} x ${i} = ${num*i}`
      ftab.appendChild(item)
    }
  }
 
}