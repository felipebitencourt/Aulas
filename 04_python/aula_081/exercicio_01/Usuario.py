class Usuario:

  def __init__(self, nome, login, senha):
    self.nome = nome
    self.login = login
    self.senha = senha

  def toString(self):
    print(f"{self.nome:<15} -> (Login: {self.login:>10}) (Senha: {self.senha:>10})")
