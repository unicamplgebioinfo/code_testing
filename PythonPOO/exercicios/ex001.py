class Gafanhoto:
  def __init__(self):
    self.nome = ""
    self.idade = 0

  def aniversario(self):
    self.idade += 1

  def mensagem(self):
    return f"{self.nome} é Gafanhoto(a) e tem {self.idade} anos de idade."



def main():
  g1 = Gafanhoto()
  g1.nome = "Maria"
  g1.idade = 17
  g1.aniversario()
  print(g1.mensagem())
  
  g2 = Gafanhoto()
  g2.idade = 39
  g2.nome = "Pablo"
  print(g2.mensagem())




if __name__ == "__main__":
  main()