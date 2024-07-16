from funcoes import *

limpa()

print("=== Break no FOR ===\n")

tentativas2 = 1

print()

for i in range(5):
    resposta = input(f"→ Você deseja encerrar o loop no FOR ({tentativas2}/5)?: ")
    tentativas2 += 1
    if(tentativas2 > 5): break
    elif(resposta.lower() == "sim"): break

print()

if(tentativas2 > 5): print("- Você ultrapassou o limite!")
else: print("- Você não ultrapassou o limite!")

print("\n\n")