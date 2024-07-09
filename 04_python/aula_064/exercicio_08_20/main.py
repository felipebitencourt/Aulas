from funcoes import *      #neste caso, as funções

limpa()

print("{:=^20}".format("INÍCIO"), "\n")

valor1 = float(input("→ Digite o primeiro valor: "))
valor2 = float(input("→ Digite o segundo valor: "))

def numero(valor1, valor2):
    if(valor1 < valor2):
        print(f"\n→ ({valor1}) e ({valor2})")
    elif(valor2 == valor1):
        print("\nOPÇÃO INVÁLIDA")
    else:
        print(f"\n→ ({valor2}) e ({valor1})")

numero(valor1, valor2)

print("\n", "{:=^20}".format("FIM"))

print("\n\n")