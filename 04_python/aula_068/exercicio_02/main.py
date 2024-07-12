from funcoes import *

limpa()

print("\n=== ÍMPAR OU PAR ===\n")

quantidade = int(input("→ Digite o total de números a serem analisados: "))
loop = 1
par = 0

print()

while(loop <= quantidade):
    numero = int(input(f"→ Digite o ({loop}º) número: "))
    resto = numero % 2
    if(resto == 0):
        par += 1
    loop += 1

impar = quantidade - par

print(f"\n=== Total de números PARES: {par} ===")
print(f"=== Total de números ÍMPARES: {impar} ===\n")

print("\n\n")