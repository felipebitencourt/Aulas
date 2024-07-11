from funcoes import *

limpa()

print("{:=^20}".format("INÍCIO"), "\n")

resposta = input("→ Você deseja tirar carta de condução? ")
teste = ""
x = 1

if(resposta.lower() == "nao"):
    print("\n→ Então utilize transporte público.")
else:
    while(teste.lower() != "sim"):
        print(f"\n→ Estudar para o ({x}º) teste.")
        teste = input(f"- Vc passou no ({x}º)? ")
        x += 1
    print(f"\nParabéns! Foi aprovado no ({x-1}º) teste.")

print("\n", "{:=^20}".format("FIM"))

print("\n\n")