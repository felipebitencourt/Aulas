from funcoes import *
from termcolor import colored, cprint

limpa()

print("\n\n")

array = ["uva", "maçã", "morango", "ananás", "banana", "laranja"]
print(colored(f"→ Lista original: {array}\n", "green"))
print(f"→ O 1º elemento é: {array[0]}\n")

print(f"→ O último 'usando indexs positivos': {array[5]}")
print(f"→ O último 'usando indexs negativos': {array[-1]}\n")

print(f"→ Sublista com 2º até 4º: {array[1:4]}\n")

array[1] = "clementina"
print(f"→ 2º elemento por 'clementina' {array}\n")
    
print("\n\n")