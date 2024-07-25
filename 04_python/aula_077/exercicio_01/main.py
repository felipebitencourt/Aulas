from funcoes import *
from termcolor import colored, cprint

limpa()

pessoa = {
    "nome": "felipe", 
    "morada": "póvoa", 
    "idade": 27, 
    "saldo": 500.00
}

# p6 = {
#     "nome": "felipe", 
#     "morada": "póvoa", 
#     "idade": 27, 
#     "saldo": 500.00,
#     "pet": {
#         "nome": "rex",
#         "peso": 13.500,
#         "raca": "Poodle"
#     }
# }


print(pessoa["idade"])


pessoa["idade"] = 30

print(pessoa["idade"])

print()
print()

for chave in pessoa:
    print(f"{chave} - {pessoa[chave]}")

print()
print()

for chave in pessoa:
    print(chave)

print()
print()

for chave in pessoa:
    print(pessoa[chave])

print()
print()

print(pessoa.keys())

print()
print()

print(pessoa.values())

print("\n\n")