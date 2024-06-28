import math
import random

print("\n\n")

inteiro = -17
dec = 1.987654321

print("=== Funções dos Inteiros === \n")

print("Inteiro original: (", inteiro, ")", sep = "")
print("Inteiro em módulo: (", abs(inteiro), ")\n", sep = "")

print("Números aleatórios entre 1 e 5: (", random.randint(1, 5), ")\n\n", sep = "")

print("=== Funções dos Floats === \n")

print("Float original: (", dec, ")\n", sep = "")

print("Float arredondado: (", round(dec), ")", sep = "")
print("Float arredondado em 1 casa: (", round(dec, 1), ")", sep = "")
print("Float arredondado em 2 casas: (", round(dec, 2), ")\n", sep = "")

print("Float arredondado para cima: (", math.ceil(dec), ")", sep = "")
print("Float arredondado para baixo: (", math.floor(dec), ")", sep = "")

print("\n\n")