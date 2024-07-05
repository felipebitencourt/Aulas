from funcoes import *

limpa()

print("{:=^20}".format("INÍCIO"), "\n")

altura = float(input("→ Digite a altura (m): "))
base = float(input("→ Digite a base (m): "))

area(altura, base)

print("\n", "{:=^20}".format("FIM"))

print("\n\n")