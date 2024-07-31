import os
import time
import globais
from Cliente import *

# Funções

def verificarCartao(cartao, pin):
  for c in globais.clientes:
    if(c.cartao == cartao and c.pin == pin): 
      globais.cliente_logado = c
      return True
  return False

def exibirMenu():
  print("=== Multibanco Python ===\n")
  print("1 - Levantamentos.")
  print("2 - Depósitos.")
  print("3 - Pagamentos.")
  print("4 - Dados da conta.")
  print("5 - Alterar PIN.")
  print("0 - Retirar cartão.")
  return int(input("- Opção: "))

# def levantar():
#   print("\n--- Levantar ---\n")

#   valor = float(input(f"- Digite o valor que deseja levantar: "))

#   if(valor > 0 and valor <= globais.cliente_logado.saldo):


def init():
  globais.clientes.append(Cliente("Felipe", "Sr.", "0001", "1111"))
  globais.clientes.append(Cliente("Maria", "Sra.", "0002", "2222"))
  globais.clientes.append(Cliente("João", "Sr.", "0003", "3333"))

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