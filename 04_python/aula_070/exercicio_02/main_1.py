from funcoes import *

limpa()

resposta = input("→ Você deseja tirar carta de condução? ")
teste = ""
x = 1

if(resposta.lower() == "nao"):
    print("\n→ Então utilize transporte público.")
else:
    while(teste.lower() != "sim"):
        
        print(f"\n→ Estudar para o ({x}º) teste.")
        teste = input(f"- Vc passou no ({x}º)? ")

        if(teste.lower() == "sim"): break

        x += 1

    print(f"\nParabéns! Foi aprovado no ({x}º) teste.")



print("\n\n")