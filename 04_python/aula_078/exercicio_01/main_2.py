from funcoes import *
from termcolor import colored, cprint

limpa()

pessoa = {
    "nome": "Fabrício", 
    "idade": 28,
    "morada": "Covilhã"
}

print("=== Dicionário com FOR ===\n")

for chave in pessoa:
    print(f"{chave}: {pessoa[chave]}")

print()
print("="*40)
print()

print("=== Dicionário apenas com 'chaves' ===\n")

print(pessoa.keys())
print()

print("="*40)

print("\n=== Dicionário apenas com 'valores' ===\n")

print(pessoa.values())

print("\n\n")