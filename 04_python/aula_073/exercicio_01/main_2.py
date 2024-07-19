from termcolor import colored, cprint
from funcoes import *
import globais

limpa()

matriz = [[0, 0, 0], [0, 0, 0], [0, 0, 0]]
soma_par = soma_coluna = 0

for l in range(0, 3):
    for c in range(0, 3):
        matriz[l][c] = int(input("→ Digite um valor: ")) #ou "→ Digite um valor para [{l}, {c}]: "

print()

for l in range(0, 3):
    for c in range(0, 3):
        print(f"[{matriz[l][c]}]", end="") #para alinhar :^5 - alinhar ao centro
    print()

print()

for l in range(0, 3):
    for c in range(0, 3):
        if(matriz[l][c] % 2 == 0):
            soma_par += matriz[l][c]

print(f"- Soma dos pares = {soma_par}")

print()

print("→ Os números pares são: ", end="")
for l in range(0, 3):
    for c in range(0, 3):
        if(matriz[l][c] % 2 == 0):
            par = matriz[l][c]
            print(f"[{par}] ", end="")

print()
print()

for l in range(0, 3):
    soma_coluna += matriz[l][2]

print(f"- Soma dos valores da coluna 3 = {soma_coluna}")

print()

maior = menor = matriz[l][c]

for l in range(0, 3):
    for c in range(0, 3):
        if(maior < matriz[l][c]): maior = matriz[l][c]
        elif(menor > matriz[l][c]): menor = matriz[l][c]

print(f"O maior número da matriz é: {maior}")
print(f"O menor número da matriz é: {menor}")

print("\n\n")