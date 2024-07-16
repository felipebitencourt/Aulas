from funcoes import *

limpa()

print("\n=== Gerador de números inteiros ===\n")

inicio = int(input("→ O número incial: "))
fim = int(input("→ O número final: "))
quantidade = int(input("→ Quantas vezes deseja que apareça a lista? "))

print()

for i in range(quantidade):
    if(fim > inicio):
        for loop in range(inicio, fim+1): print(loop)
        print("="*10)
    else:
        for loop in range(inicio, fim-1, -1): print(loop)
        print("="*10)

print("\n\n")