from funcoes import *

limpa()

init()

while(True):

  opcao = exibirMenu()

  limpa()

  if(opcao == 1): registarPET()
  elif(opcao == 2): editarPET()
  elif(opcao == 3): apagarPET()
  elif(opcao == 4): listarPETs(True)
  elif(opcao == 0): 
    animar("A sair")
    break
  else: print("--- OPÇÃO INVÁLIDA! ---")

  carregueEnter()


print("\n\n")