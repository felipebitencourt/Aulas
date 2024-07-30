class Aluno:

  def __init__(self, nome, idade, morada, nif):
    self.nome = nome
    self.idade = idade
    self.morada = morada
    self.nif = nif

  def toString(self):
    print(f"{self.nome:<20} -> (Idade: {self.idade}) (Morada: {self.morada:>10}) (NIF: {self.nif})")

  # def toStringFinal(self):
  #   print(f"--- Lista Final ---")
  #   print(f"Nome: {self.nome}")
  #   print(f"Idade: {self.idade}")
  #   print(f"Morada: {self.morada}")
  #   print(f"NIF: {self.nif}\n")
    

  # setIdade()
  def completarAnos(self):
    self.idade += 1
    print(f"{self.nome} fez anos!")

  # setMorada()
  def mudarMorada(self, nova_morada):
    print(f"{self.nome} se mudou ({self.morada}   ->   {nova_morada})")
    self.morada = nova_morada
