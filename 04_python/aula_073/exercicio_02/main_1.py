from funcoes import *

limpa()

frutas = ["morango", "laranja", "ananás", "banana", "uva"]

for l in frutas: print(l, end=" ")
    
print()
print()

for i in range(1, 6): print(f"{i} - {frutas[i-1]}")   #não indicado
print()
for i in range(5): print(f"{i+1} - {frutas[i]}")      #mais indicado

print()
print()

for i in range(len(frutas)): print(f"{i+1} - {frutas[i]}")

print()
print()

for f in reversed(frutas): print(f)

print()
print()

for i in range(len(frutas)-1, -1, -1): print(f"{i+1} - {frutas[i]}")



print("\n\n")