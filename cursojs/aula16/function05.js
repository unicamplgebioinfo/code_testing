// RECURSIVIDADE
function fatorial(n) {
  let fat = 1
  if (n > 1) {
    fat = n*fatorial(n-1)
  }
  return fat
}


console.log(fatorial(5))