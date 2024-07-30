from funcoes import *
from Pessoa import *

limpa()


# p1 = novaPessoa("Fabricio", 28, "Covilhã")
# print(p1["nome"])

p1 = Pessoa("Fabrício", 28, "Covilhã")
p2 = Pessoa("Maria", 55, "Lisboa")
p3 = Pessoa("João", 12, "Almada")

print(p1.nome)
print(p1.idade)
print(p1.morada)

# p1["idade"] += 1
p1.idade += 1

print(p1.idade)

print("="*20)

# print(f"{p1.nome} - (Idade: {p1.idade}) [Morada: {p1.morada}]")
# print(f"{p2.nome} - (Idade: {p2.idade}) [Morada: {p2.morada}]")
# print(f"{p3.nome} - (Idade: {p3.idade}) [Morada: {p3.morada}]")
p1.toString()
p2.toString()
p3.toString()

print("\n\n")