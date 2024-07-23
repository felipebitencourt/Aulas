from funcoes import *
from termcolor import colored, cprint

limpa()

matriz = [
    ["Fabrício", "28", "Covilhã"],
    ["Maria", "14", "Lisboa"],
    ["Ana", "56", "Amadora"],
    ["Carlos", "44", "Porto"]
]

for linha in matriz:
    print(f"{linha[0]} - Idade: {linha[1]} - Morada: {linha[2]}")
print()
    
print("\n\n")