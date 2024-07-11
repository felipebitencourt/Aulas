from funcoes import *

limpa()

print("\n\n")

resposta = int(input("→ Digite o número para obter a tabuada: "))
x = 0

print(f"\n=== TABUADA DO ({resposta}) ===\n")

while(x <= 10):
    calc = (x) * resposta
    print(f"{x:>2} x {resposta} = {calc}")
    x += 1    

print("\n\n")