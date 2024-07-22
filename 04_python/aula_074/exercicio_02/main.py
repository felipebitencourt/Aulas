from funcoes import *
from termcolor import colored, cprint

limpa()

while(True):
    limpa()

    opcao = exibirMenu()

    animar("Aguarde")
    
    if(opcao == 1): registrar()
    elif(opcao == 2): editarPessoas()
    elif(opcao == 3): apagarPessoas()
    elif(opcao == 4): listarPessoas()
    elif(opcao == 0):
        animar("Sair")
        break
    else: print(colored("\n" + "{:-^40}".format(" OPÇÃO INVÁLIDA ") + "\n", "red"))
    
    input(colored("\n→ Aperte <ENTER> para contiuar... ", "blue"))
    
print("\n\n")