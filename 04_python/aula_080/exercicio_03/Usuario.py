class Usuario:

  def __init__(self, nome, login, senha):
    self.nome = nome
    self.login = login
    self.senha = senha

  def toString(self):
    print(f"{self.nome} -> (Login: {self.login}) (Senha: {self.senha})")
