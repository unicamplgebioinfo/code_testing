function fatorial(n) {
  let fat = 1
  for (let a = n; a > 1; a--) {
    fat *= a
  }
  return fat
}

console.log(fatorial(5))