from funcoes import *

limpa()

animar2("Aguarde")

frase = "Codemaster"

for letra in frase:
    print(letra)

print()

for i in range(5):
    print("Felipe")

print()

tabuada = int(input("→ Digite um  número para obter a tabuada: "))

print()

for i in range(11): print(f"{i:>2} x {tabuada} = {i * tabuada}")

print()

for i in range(1, 11): print(i)   #Lista de 1 ~ 10 (11 - 1) colocar sempre +1 ao q quer

print()

for i in range(0, 101, 5): print(i)    #O "5" é o salto que ele dará no intervalo

print()

for i in range(10, 0, -1): print(i)    #O salto será decrescente

print()

numero = int(input("→ Digite o número para calcular o múltiplo: "))

print()

for loop in range(0, 101, numero): print(loop)

print()



print("\n\n")