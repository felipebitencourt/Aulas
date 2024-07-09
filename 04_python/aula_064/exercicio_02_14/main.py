from funcoes import *

limpa()

print("{:=^20}".format("INÍCIO"), "\n")

numero = float(input("→ Digite um número: "))

def valor(numero):
    print(f"\n→ {numero} é maior que 10!.")

if(numero > 10):
    valor(numero)
elif(numero == 10):
    print(f"\n→ {numero} é igual a 10!.")
else:
    print(f"\n→ {numero} é menor que 10!.")

print("\n", "{:=^20}".format("FIM"))

print("\n\n")