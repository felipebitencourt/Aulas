from funcoes import *

limpa()

print("=== Ficha de Candidatura ===", "\n")

nome = input("→ Digite seu nome: ")
idade = int(input("→ Digite sua idade: "))
con = input("→ Tem conhecimentos em programação? ")
tempo = 0.4

print()

limpa()

print("A analisar", end="", flush=True)
aguarde(tempo)
print(".", end="", flush=True)
aguarde(tempo)
print(".", end="", flush=True)
aguarde(tempo)
print(".", end="", flush=True)

limpa()

print("=== Ficha de Candidatura ===", "\n")

print(f"Nome: {nome}")
print(f"Idade: {idade}")
print("Status: ", end="", flush=True)

candidatura(idade, con)

print("\n\n")