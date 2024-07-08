from funcoes import *      #neste caso, as funções

limpa()

print("{:=^20}".format("INÍCIO"), "\n")

valor1 = float(input("→ Digite o primeiro valor: "))
valor2 = float(input("→ Digite o segundo valor: "))

def numero(valor1, valor2):
    if(valor1 > valor2):
        print(f"\n→ O maior valor é: {valor1}")
    elif(valor2 == valor1):
        print("\nOPÇÃO INVÁLIDA")
    else:
        print(f"\n→ O maior valor é: {valor2}")

numero(valor1, valor2)

print("\n", "{:=^20}".format("FIM"))

print("\n\n")