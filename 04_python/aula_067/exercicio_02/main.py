from funcoes import *

limpa()

print("\n=== Buscador de Múltiplos ===\n")

numero = int(input("→ Digite um número inteiro: "))
x = 0

print(f"\n --- Múltiplos de ({numero}) de 0 a 100 --- \n")


while(x <= 100):

    if(x % numero == 0):
        print(f" {x}")
    x += 1



print("\n\n")
