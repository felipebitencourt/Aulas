from termcolor import colored, cprint
from funcoes import *

limpa()

lista = []
quantidade = int(input("\n→ Digite quantos alunos serão cadastrados: "))

animar2("Aguarde")

for i in range(1, quantidade+1):
    nomes = input(f"→ Digite o nome do(a) {i}º aluno(a): ")
    lista.append(nomes)

animar2("Aguarde")

cprint("=== Lista de Alunos Ordenada ===\n", "blue")
lista.sort()
for l in range(len(lista)): print(f"{l+1} - {lista[l]}.")

print("\n\n")