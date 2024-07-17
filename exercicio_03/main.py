from funcoes import *

limpa()


while(True):

  opcao = exibirMenu()

  animar2("Aguarde")

  if(opcao == 1): levantamentos()
  elif(opcao == 2): depositos()
  elif(opcao == 3): pagamentos()
  elif(opcao == 4): exibirHistorico()
  elif(opcao == 0): 
    animar2("A sair...")
    break
  else:
    print("--- OPÇÃO INVÁLIDA ---")

  carregueEnter()

print("\n\n")