from funcoes import *
import globais
from termcolor import colored, cprint

limpa()

while(True):
    limpa()

    opcao = exibirMenu()

    animar("Aguarde")
    
    if(opcao == 1): vender()
    elif(opcao == 2): historico()
    elif(opcao == 0):
        animar("Sair")
        break
    else: print(colored("\n--- OPÇÃO INVÁLIDA ---\n", "red"))

    input("→ Aperte <ENTER> para contiuar... ")
    
print("\n\n")