from funcoes import *

limpa()

init()

while(True):

  opcao = exibirMenu()

  limpa()

  if(opcao == 1): registarProduto()
  elif(opcao == 2): editarProduto()
  elif(opcao == 3): apagarProduto()
  elif(opcao == 4): listarProdutos(True)
  elif(opcao == 5): vender()
  elif(opcao == 6): listarVendas()
  elif(opcao == 0): 
    animar("A sair")
    break
  else: print("--- OPÇÃO INVÁLIDA ---")

  carregueEnter()

print("\n\n")