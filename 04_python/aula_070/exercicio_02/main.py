from funcoes import *

limpa()

print("=== Break no WHILE ===\n")

tentativas = 1
while(True):
    resposta = input(f"→ Você deseja encerrar o loop no WHILE ({tentativas}/5)?: ")
    if(resposta.lower() == "sim"): 
        print("\n- Você não ultrapassou o limite!")
        break
    tentativas += 1
    if(tentativas > 5): 
        print("\n- Você ultrapassou o limite!")
        break

print()

print("=== Break no FOR ===\n")

tentativas2 = 1

print()

for i in range(5):
    resposta = input(f"→ Você deseja encerrar o loop no FOR ({tentativas2}/5)?: ")
    if(resposta.lower() == "sim"): 
        print("\n- Você não ultrapassou o limite!")
        break
    tentativas2 += 1
    if(tentativas2 > 5): 
        print("\n- Você ultrapassou o limite!")
        break

print("\n\n")