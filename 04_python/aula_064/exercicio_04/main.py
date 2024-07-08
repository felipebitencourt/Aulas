from funcoes import *      #neste caso, as funções

limpa()

print("{:=^20}".format("INÍCIO"), "\n")

valor = int(input("→ Quantas maçãs você comprou?: "))

print()

def preco(valor):
    resultado1 = valor * 1  
    print(f"→ Você gastou € {resultado1}")

def precoCada(valor):
    resultado2 = valor * 1.3
    print(f"→ Você gastou € {resultado2}")

if(valor >= 12):
    preco(valor)
else:
    precoCada(valor)

print("\n", "{:=^20}".format("FIM"))

print("\n\n")