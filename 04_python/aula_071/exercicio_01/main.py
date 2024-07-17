from funcoes import *
import globais

limpa()

while(True):
    limpa()
    print("=== MULTIBANCO PYTHON ===")
    print(f"\nBem vindo(a) {globais.nome} ")
    print(f"Saldo atual: {globais.saldo:.2f}")

    print()

    exibirMenu()

    opcao = int(input("→ Opção: "))

    animar2("Aguarde")

    if(opcao == 1): levantar()
    elif(opcao == 2): depositar()
    elif(opcao == 3): pagar()
    elif(opcao == 4): extrato()
    elif(opcao == 5):
        animar2("Sair") 
        break
    else: print("\n--- OPÇÃO INVÁLIDA ---\n")

    input("Aperte <ENTER> para contiuar: ")
    
print("\n\n")