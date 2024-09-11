from funcoes import *
from Cliente import *
import globais

limpa()

while(True):
    limpa()

    print("=== Multibanco Python ===")

    cartao = input(f"- Insira o cartão: ")
    pin = input(f"- Digite o pin: ")

    opcao = exibirMenu()

    apertarEnter()

print("\n\n")