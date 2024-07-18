from funcoes import *

limpa()

p1 = "José"
p2 = "Maria"
p3 = "João"

pessoas = ["José", "Maria", "João"]

print(pessoas[2])

#Adicionar posição no final
pessoas.append("bruno")
pessoas.append("ana")
print(pessoas)

#Adicionar posição específica
pessoas.insert(0, "alice")
pessoas.insert(2, "felipe")
print(pessoas)

#Apagar posição no final
pessoas.pop()
pessoas.pop()
print(pessoas)

#Apagar posição específica
pessoas.pop(0)
pessoas.pop(0)
print(pessoas)

#Apagar um elemento específico
pessoas.remove("João")
print(pessoas)

frutas = ["uva", "maçã", "morango"]

total_posicoes = len(frutas)
print(frutas[total_posicoes-1])

#Método global
print(frutas[len(frutas) - 1])

#Apenas no python
print(frutas[-1])

#Sublistas em python (semelhante ao range)
print(frutas[0:3])

print("\n\n")