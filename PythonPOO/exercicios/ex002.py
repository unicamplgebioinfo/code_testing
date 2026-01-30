class Gafanhoto:
  """
  Classe que representa um Gafanhoto.

  A classe Gafanhoto é utilizada para criar objetos que representam um gafanhoto,
  com atributos para nome e idade. Ela também fornece métodos para incrementar a
  idade do gafanhoto e para retornar uma mensagem descritiva sobre o gafanhoto.

  Atributos:
    nome (str): O nome do gafanhoto. Padrão é "Vazio".
    idade (int): A idade do gafanhoto. Padrão é 0.

  Métodos:
    aniversario(): Incrementa a idade do gafanhoto em 1.
    mensagem(): Retorna uma string com o nome e a idade do gafanhoto.
  """
  def __init__(self, nome="Vazio", idade=0):
    self.nome = nome
    self.idade = idade

  def aniversario(self):
    self.idade += 1

  def __str__(self):
    return f"{self.nome} é Gafanhoto(a) e tem {self.idade} anos de idade."


def main():
  g1 = Gafanhoto("Maria", 17)
  g1.aniversario()
  print(g1)
  
  g2 = Gafanhoto("Pablo", 39)
  print(g2)

  g3 = Gafanhoto()
  print(g3)


if __name__ == "__main__":
  main()