from funcoes import *
import globais

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
    else:
        print("\n--- OPÇÃO INVÁLIDA ---\n")

    input("→ Aperte <ENTER> para contiuar... ")
    
print("\n\n")