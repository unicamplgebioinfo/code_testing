
class ContaBancaria:
  """
  A classe permite realizar operações de depósito e saque, além de manter o controle do saldo da conta.

  Atributos:
    saldo (float): O saldo atual da conta. O valor padrão é 0.

  Métodos:
    depositar(valor): Adiciona um valor ao saldo da conta se o valor for positivo.
    sacar(valor): Remove um valor do saldo da conta se o valor for positivo e não exceder o saldo atual.
  """

  def __init__(self, id, nome, saldo=0):
    self.id = id
    self.nome = nome
    self.saldo = saldo
    print(f"Conta {self.id} de {self.nome} criada com sucesso. Saldo atual de R${self.saldo:,.2f}.")

  def __str__(self):
    return f"A conta {self.id} de {self.nome} tem R${self.saldo:,.2f} de saldo."

  def depositar(self, valor):
    if valor > 0:
      self.saldo += valor
      print(f'Depósito de R${valor:,.2f} autorizado na conta {self.id}')
    else:
      print('Valor de depósito inválido.')

  def sacar(self, valor):
    if 0 < valor <= self.saldo:
      self.saldo -= valor
      print(f'Saque de R${valor:,.2f} autorizado na conta {self.id}')
    else:
      print('Valor de saque inválido.')


def main():
  conta = ContaBancaria(112, "Gustavo", 3000)
  # conta.depositar(100)
  # conta.sacar(50)
  # conta.sacar(60)  # Tentativa de saque inválido
  # conta.depositar(-10)  # Tentativa de depósito inválido
  # print(f'Saldo final: {conta.saldo}')
  conta.depositar(500)
  conta.sacar(2000)
  print(conta)


if __name__ == "__main__":
  main()
