from funcoes import *

limpa()


numero_digitado = int(input("- Digite o número limite inteiro positivo: "))

print()

loop = 1
while(loop <= numero_digitado):
  print(loop)
  loop += 1

print()

loop = numero_digitado
while(loop >= 1):
  print(loop)
  loop -= 1

print("\n\n")