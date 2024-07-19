import os
import time
import globais
from termcolor import colored, cprint

#funções especiais
def limpa():
    if(os.name == "nt"): os.system("cls")
    else: os.system("clear")

def aguarde(tempo): time.sleep(tempo)

def animar(frase):
    tempo = 0.2
    limpa()

    print(frase, end="", flush=True)
    for loop in range(3):
        print(".", end="", flush=True)
        aguarde(tempo)

    limpa()

def animar2(frase):
    tempo = 0.15
    limpa()

    frase += "..."

    for letra in frase:
        print(letra, end="", flush=True)
        aguarde(tempo)

    limpa()

def exibirMenu():
    print("=== PADARIA DO PYTHON ===")
    print("\n1 - Vender.")
    print("2 - Ver histórico.")
    print("0 - Sair.")
    return int(input("\n→ Opção: "))

def vender():
    print("{:-^30}".format(" Vender "), "\n")
    descricao = input("→ Descrição da venda: ")
    valor = float(input("→ Valor total da venda: "))

    if(valor > 0): 
        print(colored("\n" + "{:-^30}".format(" SUCESSO ") + "\n", "green"))
        globais.saldo += valor
        globais.historico += f"{descricao} → {valor:.2f} €\n"
    else: print(colored("\n--- VALOR INVÁLIDO ---\n", "red"))

def historico():
    print("{:-^30}".format(" Histórico "), "\n")
    print(f"Total das vendas: {globais.saldo:.2f} €\n")
    print(globais.historico)
