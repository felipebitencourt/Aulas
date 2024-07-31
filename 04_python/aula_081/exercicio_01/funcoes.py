import os
import time
import globais
from Usuario import *

# Funções
def verificarLogin(login_digitado):
  for u in globais.usuarios:
    if(u.login == login_digitado): 
      u.toString()
      return True 
  return False



# Funções Especiais
def limpa():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def aguarde(tempo): time.sleep(tempo)

def animar(frase):
  tempo = 0.075
  limpa()
  frase += "..."

  for letra in frase:
    print(letra, end="", flush=True)
    aguarde(tempo)

  limpa()

def carregueEnter():
  input("\nCarregue <ENTER> para continuar...")