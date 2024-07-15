from funcoes import *

limpa()

print("\n=== Gerador de números inteiros ===\n")

inicio = int(input("→ O número incial: "))
fim = int(input("→ O número final: "))

print()

if(fim > inicio):
    for loop in range(inicio, fim+1): print(loop)
else:
    for loop in range(inicio, fim-1, -1): print(loop)

print("\n\n")