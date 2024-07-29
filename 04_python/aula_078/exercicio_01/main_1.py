from funcoes import *
from termcolor import colored, cprint

limpa()

while(True):
    limpa()

    opcao = exibirMenu()

    animar("Aguarde")
    
    if(opcao == 1): registrarProduto()
    elif(opcao == 2): editarProdutos()
    elif(opcao == 3): apagarProdutos()
    elif(opcao == 4): listarProdutos(True)
    elif(opcao == 5): vender()
    elif(opcao == 6): listarVendas()
    elif(opcao == 0):
        animar("Sair")
        break
    else: print(colored("\n" + "{:-^40}".format(" OPÇÃO INVÁLIDA ") + "\n", "red"))
    
    input("\n→ Aperte <ENTER> para contiuar... ")

print("\n\n")