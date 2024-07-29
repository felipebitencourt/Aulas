import os
import time
import globais

# Funções
def exibirMenu():
  animar("Aguarde")
  print("=== PETSHOP PYTHON ===\n")
  print("1 - Registar PET.")
  print("2 - Editar PET.")
  print("3 - Apagar PET.\n")
  print("4 - Listar todos os PET.\n")
  print("0 - Sair.\n")
  return int(input("- Opção: "))

def registarPET():
  print("--- Registar PET ---\n")
  nome = input("- Digite o NOME do novo PET: ")
  if(not nomeJaExiste(nome)):
    raca = input("- Digite a RAÇA do novo PET: ")
    peso = float(input("- Digite o PESO do novo PET: "))
    cor = input("- Digite a COR do novo PET: ")
    globais.pets.append(novoPET(nome, raca, peso, cor))
    print("\n--- SUCESSO! ---")
  else: print("\n--- NOME JÁ EXISTE! ---")

def editarPET():
  print("--- Apagar PET ---\n")
  listarPETs(False)
  id = int(input("- Digite o ID do PET que desejas editar: ")) - 1
  if(id >= 0 and id < len(globais.pets)):

    p = globais.pets[id]
    
    print("\n--- Edição ---\n")
    print("1 - Nome.")
    print("2 - Raça.")
    print("3 - Peso.")
    print("4 - Cor.\n")
    print("0 - Cancelar.\n")
    opcao = int(input("- Opção: "))

    if(opcao == 1):
      nome = input(f"\n- Digite o nome que substituirá ({p['nome']}): ")
      if(not nomeJaExiste(nome)):
        p["nome"] = nome
        print("\n--- SUCESSO! ---")
      else: print("\n--- NOME JÁ EXISTE! ---")
    elif(opcao == 2):
      p["raca"] = input(f"\n- Digite a raça que substituirá ({p['raca']}): ")
      print("\n--- SUCESSO! ---")
    elif(opcao == 3):
      p["peso"] = float(input(f"\n- Digite o peso que substituirá ({p['peso']:.3f} kg): "))
      print("\n--- SUCESSO! ---")
    elif(opcao == 4):
      p["cor"] = input(f"\n- Digite a cor que substituirá ({p['cor']}): ")
      print("\n--- SUCESSO! ---")
    elif(opcao == 0): print("\n--- OPERAÇÃO CANCELADA! ---")
    else: print("\n--- OPÇÃO INVÁLIDA! ---")
    
  else: print("\n--- ID INVÁLIDO! ---")

def apagarPET():
  print("--- Apagar PET ---\n")
  listarPETs(False)
  id = int(input("- Digite o ID do PET que desejas apagar: ")) - 1
  if(id >= 0 and id < len(globais.pets)):
    resposta = input(f"\n- Tem certeza que desesjas apagar o PET ({globais.pets[id]['nome']}): ")
    if(resposta.lower() == "sim"):
      globais.pets.pop(id)
      print("\n--- SUCESSO! ---")
    else: print("\n--- OPERAÇÃO CANCELADA! ---")
  else: print("\n--- ID INVÁLIDO ---")

def listarPETs(com_titulo):
  if(com_titulo): print("--- Lista de PETs ---\n")
  for i in range(len(globais.pets)): toString(i, globais.pets[i])









# Funções Auxiliares
def novoPET(nome, raca, peso, cor):
  novo_pet = {
    "nome": nome,
    "raca": raca,
    "peso": peso,
    "cor": cor
  }
  return novo_pet

def toString(i, pet):
  print(f"--- #{i+1} ( {pet['nome']} ) ---")
  print(f"Raça: {pet['raca']}.")
  print(f"Peso: {pet['peso']:.3f} kg.")
  print(f"Cor do pêlo: {pet['cor']}.\n")

def init():
  globais.pets.append(novoPET("Rex", "Poodle", 9.350, "Branco"))
  globais.pets.append(novoPET("Max", "Serra da Estrela", 12.500, "Castanho"))
  globais.pets.append(novoPET("Pingo", "Golden", 19.250, "Gold"))
  globais.pets.append(novoPET("Spike", "Cocker", 13.450, "Preto"))

def nomeJaExiste(nome):
  for p in globais.pets:
    if(p["nome"] == nome): return True
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