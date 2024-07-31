from funcoes import *
from Usuario import *
import globais

limpa()

print("=== Lista Original ===\n")

for u in globais.usuarios: u.toString()

print()

login = input("→ Digite o login que deseja buscar: ")

print()

if(verificarLogin(login)):
    print("\n--- Encontrado! ---")  
else:
    print("\n--- NÂO encontrado! ---")

print("\n\n")