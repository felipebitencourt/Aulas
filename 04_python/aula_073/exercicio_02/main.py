from funcoes import *
import globais
from termcolor import colored, cprint

limpa()

frutas = ["uva", "maçã", "morango", "ananás", "banana", "laranja"]
print(f"Lista original: ", frutas, "\n")

cprint("\nLISTA COM FOR\n", "blue")

for l in frutas: print(l, end=" ")

print()

cprint("\nLISTA COM FOR + RANGE\n", "blue")

for i in range(len(frutas)): print(f"{i+1} - {frutas[i]}")

cprint("\nLISTA COM FOR + REVERSE\n", "blue")

for f in reversed(frutas): print(f)

cprint("\nLISTA COM FOR + RANGE REVERSE\n", "blue")

for i in range(len(frutas)-1, -1, -1): print(f"{i+1} - {frutas[i]}")


print("\n\n")