from funcoes import *
from termcolor import colored, cprint

limpa()

matriz = [["morango", "banana", "uva"], ["frango", "bifana", "novilho"], ["água", "cola", "pepsi"]]

print(matriz)
print()

print("="*30)

for linha in matriz:
    print(linha)
print()
    
print("="*30)

for linha in matriz:
    for coluna in linha:
        print(coluna)
    print()

print("\n\n")