from funcoes import *

limpa()

print("{:=^20}".format("INÍCIO"), "\n")

def mediafinal():
    n1 = float(input("→ Digite sua nota 01: "))
    n2 = float(input("→ Digite sua nota 02: "))
    n3 = float(input("→ Digite sua nota 03: "))
    resultado = (n1*2 + n2*3 + n3*5) / 10
    print(f"\n→ Sua média final é: {resultado:.2f}")

mediafinal()

print("\n", "{:=^20}".format("FIM"))

print("\n\n")