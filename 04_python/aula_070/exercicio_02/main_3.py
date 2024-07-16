from funcoes import *

limpa()

tentativas = 1
while(True):
    numero = int(input("→ Digite um número: "))
    if(numero % 5 == 0): break
    tentativas += 1
    if(tentativas > 5): break

print()

if(tentativas > 5): print("- Vc ultrapssou o limite!")
else: print("- Parebéns!")

print("\n\n")