from funcoes import *      #neste caso, as funções

limpa()

print("{:=^20}".format("INÍCIO"), "\n")

numero = float(input("→ Digite um número: "))

def valor(numero):
    print(f"\n→ ({numero}) é positivo.")

if(numero >= 0):
    valor(numero)
else:
    print(f"\n→ ({numero}) é negativo.")

print("\n", "{:=^20}".format("FIM"))

print("\n\n")