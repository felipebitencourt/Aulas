from termcolor import colored, cprint
from funcoes import *
import globais

limpa()

lista_1 = ["uva", "maçã", "morango", "ananás", "banana", "laranja"]
lista_2 = ["bolo", "pão", "queijo"]

print(lista_1)
print(lista_2)

print()

lista_1.sort()
print(f"Lista ordenada 1: ", lista_1)

print()

lista_1.sort(reverse=True)
print(f"Lista 1 reversa: ", lista_1)

print()

if("morango" in lista_1): print("True")
else: print("False")

print()

lista_1.extend(lista_2)
print("Lista 1 extendida com a lista 2:")
print(lista_1)

print()

lista_1.clear()
print(f"Lista 1 limpada:", lista_1)

print("\n\n")