from funcoes import *
from termcolor import colored, cprint

limpa()

while(True):
    limpa()

    opcao = exibirMenu()
    animar("Aguarde")

    if(opcao == 1): registrarColaborador()
    elif(opcao == 2): editarColaborador()
    elif(opcao == 3): apagarColaborador()
    elif(opcao == 4): listarColaborador(True)
    elif(opcao == 0):
        animar("Sair")
        break
    else: print(colored("\n" + "{:-^40}".format(" OPÇÃO INVÁLIDA ") + "\n", "red"))
    
    input(colored("\n→ Aperte <ENTER> para contiuar... ", "blue"))
    
print("\n\n")