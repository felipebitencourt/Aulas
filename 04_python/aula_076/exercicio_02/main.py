from funcoes import *
from termcolor import colored, cprint

limpa()

pessoas = []

total = int(input("- Quantas pessoas serão registradas? "))

print()

for i in range(1, total+1):
    nome = input(f"Digite o nome da ({i}ª) pessoa: ")
    idade = int(input(f"Digite a idade da ({i}ª) pessoa: "))
    morada = input(f"Digite a morada da ({i}ª) pessoa: ")
    nova_pessoa = [nome, idade, morada]
    pessoas.append(nova_pessoa)
    print()
    
print("\n", "="*50, "\n")

for i in range(len(pessoas)):
    print(f"{i+1} - {pessoas[i][0]} tem {pessoas[i][1]} anos e mora em {pessoas[i][2]}.")


print("\n\n")