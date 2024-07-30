class Pessoa:

  def __init__(self, nome, idade, morada):
    self.nome = nome
    self.idade = idade
    self.morada = morada

    # nova_pessoa = {
    #   "nome": nome,
    #   "idade": idade,
    #   "morada": morada
    # }
    # return nova_pessoa

  def toString(self):
    print(f"{self.nome} - (Idade: {self.idade}) [Morada: {self.morada}]")