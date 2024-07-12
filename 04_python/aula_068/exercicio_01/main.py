from funcoes import *

limpa()

print("\n")

numero = int(input("→ Digite o número total de alunos: "))
x = 1
media = 0

print()

while(x <= numero):
    idade = int(input(f"Digite a idade do(a) ({x}º) aluno(a): "))
    media += idade / numero
    x += 1
print(f"\n→ A média das idades é ({media:.1f}).")  

print("\n\n")