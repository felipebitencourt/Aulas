from termcolor import colored, cprint
from funcoes import *

limpa()

lista = []
quantidade = int(input("\n→ Digite quantos alunos serão cadastrados: "))

for i in range(quantidade):
    nomes = input(f"→ Digite o nome do(a) {i+1}º aluno(a): ")
    lista.append(nomes)

animar2("Aguarde")

cprint("=== Lista de Alunos Ordenada ===\n", "blue")
lista.sort()
for l in range(len(lista)): print(f"{l+1} - {lista[l]}")

print("\n\n")