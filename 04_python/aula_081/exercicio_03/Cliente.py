class Cliente:

  def __init__(self, nome, genero, cartao, pin):
    self.nome = nome
    self.genero = genero
    self.cartao = cartao
    self.pin = pin
    self.saldo = 0
    self.historico = []

  def toString(self):
    print(f"Nome: {self.nome}")
    print(f"{self.saldo:.2f} €")
    print(f"Nº do cartão: {self.cartao}")
