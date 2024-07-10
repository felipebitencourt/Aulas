from funcoes import *

limpa()

print("{:=^20}".format("INÍCIO"), "\n")

numero = int(input("→ Digite um número inteiro positivo: "))
x = (numero - numero) + 1

print()

while(x <= numero):
    print(x)
    x += 1

print()

print("{:=^20}".format("Desafio"), "\n")

print()

while(x > 1):
    print(x-1)
    x -= 1


print("\n", "{:=^20}".format("FIM"))

print("\n\n")