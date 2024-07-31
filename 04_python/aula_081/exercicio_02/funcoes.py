import os
import time
import globais
from Usuario import *

# Funções
def verificarLogin(login_digitado, senha_digitada):
  for u in globais.usuarios:
    if(u.login == login_digitado and u.senha == senha_digitada): 
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

def apertarEnter():
  input("\nAperte <ENTER> para continuar...")