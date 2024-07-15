from funcoes import *

limpa()

print("\n=== Maior ou Menor ===\n")

quantidade = int(input("→ Digite o total de números a serem analisados: "))
loop = 1
maior = None
menor = None

print()

while(loop <= quantidade):
    numero_digitado = int(input(f"→ Digite o ({loop}º) número: "))

    if(loop == 1):
        maior = numero_digitado
        menor = numero_digitado
    else:
        if(numero_digitado > maior): maior = numero_digitado
        if(numero_digitado < menor): menor = numero_digitado
    
    loop += 1

print(f"\n=== O MAIOR número é: {maior} ===")
print(f"=== O MENOR número é: {menor} ===\n")

print("\n\n")