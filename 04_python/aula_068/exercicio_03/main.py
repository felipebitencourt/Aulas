from funcoes import *

limpa()

print("\n=== Maior ou Menor ===\n")

quantidade = int(input("→ Digite o total de números a serem analisados: "))
loop = 1

print()

while(loop <= quantidade):
    numero = int(input(f"→ Digite o ({loop}º) número: "))
    valor = numero
    loop += 1
    if(valor > numero):
        maior = valor
    elif(valor < numero):
        menor = valor

print(f"\n=== O MAIOR número é: {maior} ===")
print(f"=== O MENOR número é: {menor} ===\n")

print("\n\n")