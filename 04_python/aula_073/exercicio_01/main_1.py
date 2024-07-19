from termcolor import colored, cprint
from funcoes import *
import globais

limpa()

lista_1 = ["x-acto", "cadeira", "mesa", "bola", "água"]
lista_2 = [32, 0, 5, -9, 10]

print(lista_1)
print(lista_2)

print()

lista_1.sort()
lista_2.sort()
print(lista_1)
print(lista_2)

print()

lista_1.sort(reverse=True)
lista_2.sort(reverse=True)
print(lista_1)
print(lista_2)

print()

if("morango" in lista_2): print("True")
else: print("False")

print()

lista_1.extend(lista_2)
print(lista_1)

print()

lista_2.clear()
print(lista_2)

print("\n\n")