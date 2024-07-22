from termcolor import colored, cprint
import random
from funcoes import *

limpa()

nomes = ["felipe", "ana", "qualquer", "fabricio", "marcos"]
apelidos  = ["bitencourt", "maria", "coisa", "vidal", "arantes"]

quantidade = int(input("\n→ Total de nomes completos aleatórios que você deseja gerar: "))

print()

for i in range(1, quantidade+1):
    n = random.randint(0, len(nomes)-1)
    a = random.randint(0, len(apelidos)-1)
    print(f"{i} - {nomes[n]} {apelidos[a]}.")

print("\n\n")