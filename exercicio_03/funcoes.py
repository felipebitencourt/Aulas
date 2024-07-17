import os
import time
import globais

# Funções
def exibirMenu():
  animar2("Aguarde")
  print("=== MULTIBANCO PYTHON ===\n")
  print(f"Conta: {globais.nome}")
  print(f"Saldo: {globais.saldo:.2f} €\n")
  print("1 - Levantamentos.")
  print("2 - Depósitos.")
  print("3 - Pagamentos.")
  print("4 - Exibir Histórico.\n")
  print("0 - Sair.\n")
  return int(input("- Opção: "))

def levantamentos():
  print("--- Levantamentos ---\n")
  valor = float(input("- Valor a ser levantado: "))

  if(valor > 0 and valor <= globais.saldo):
    globais.saldo -= valor
    globais.historico += f"Levantamento de [{valor:.2f} €]\n"
    print("\n--- SUCESSO! ---")

  else:
    globais.historico += f"Tentativa de levantamento de [{valor:.2f} €]\n"
    print("\n--- VALOR INVÁLIDO! ---")

def depositos():
  print("--- Depósitos ---\n")
  valor = float(input("- Valor a ser depositado: "))

  if(valor > 0):
    globais.saldo += valor
    globais.historico += f"Depósito de [{valor:.2f} €]\n"
    print("\n--- SUCESSO! ---")

  else:
    globais.historico += f"Tentativa de depósito de [{valor:.2f} €]\n"
    print("\n--- VALOR INVÁLIDO! ---")

def pagamentos():
  print("--- Pagamentos ---\n")
  descricao = input("- Descrição do pagamento: ")
  valor = float(input("- Valor a ser levantado: "))

  if(valor > 0 and valor <= globais.saldo):
    globais.saldo -= valor
    globais.historico += f"Pagamento de ({descricao}) => [{valor:.2f} €]\n"
    print("\n--- SUCESSO! ---")

  else:
    globais.historico += f"Tentativa pagamento de ({descricao}) => [{valor:.2f} €]\n"
    print("\n--- VALOR INVÁLIDO! ---")

def exibirHistorico():
  print("--- Histórico ---\n")
  print(globais.historico)


















# Funções Especiais
def limpa():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def aguarde(tempo): time.sleep(tempo)

def animar(frase):
  tempo = 0.1
  limpa()

  print(frase, end="", flush=True)
  for loop in range(10):
    print(".", end="", flush=True)
    aguarde(tempo)

  limpa()

def animar2(frase):
  tempo = 0.1
  limpa()
  frase += "..."

  for letra in frase:
    print(letra, end="", flush=True)
    aguarde(tempo)

  limpa()

def carregueEnter():
  input("\nCarregue <ENTER> para continuar...")