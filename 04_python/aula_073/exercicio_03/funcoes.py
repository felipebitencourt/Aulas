from termcolor import colored, cprint
import os
import time
import globais

#funções especiais
def limpa():
    if(os.name == "nt"): os.system("cls")
    else: os.system("clear")

def aguarde(tempo): time.sleep(tempo)

def animar(frase):
    tempo = 0.3
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

def animar3(frase):
    tempo = 3

    for letra in frase:
        print(letra, end="", flush=True)
        aguarde(tempo)

    limpa()


def depositar():
    cprint("{:-^30}".format(" Depósitos ") + "\n", "black", "on_white")
    valor = float(input("→ Valor a ser depositado: "))

    if(valor > 0):

        cprint("\n" + "{:-^30}".format(" SUCESSO ") + "\n", "green")
        
        globais.saldo += valor
        globais.extrato += f"Depósito →"
        globais.extrato += colored(f" {valor:.2f} €\n", "green")

    else: print(colored("\n" + "{:-^30}".format(" VALOR INVÁLIDO ") + "\n", "red"))

    print(f"\nSaldo atual: {globais.saldo:.2f} € \n")

def levantar():
    cprint("{:-^30}".format(" Levantamentos ") + "\n", "black", "on_white")
    valor = float(input("→ Valor a ser levantado: "))

    if(valor > 0 and valor <= globais.saldo): 

        print(colored("\n" + "{:-^30}".format(" SUCESSO ") + "\n", "green"))

        globais.saldo -= valor
        globais.extrato += f"Levantamento →"
        globais.extrato += colored(f" {valor:.2f} €\n", "red")

    else: print(colored("\n" + "{:-^30}".format(" VALOR INVÁLIDO ") + "\n", "red"))

    print(f"\nSaldo atual {globais.saldo:.2f} € \n")

def pagar():
    cprint("{:-^30}".format(" Pagamentos ") + "\n", "black", "on_white")
    descricao = input("→ Descrição do pagamento: ")
    valor = float(input("→ Valor à pagar: "))

    if(valor > 0 and valor <= globais.saldo): 

        print(colored("\n" + "{:-^30}".format(" SUCESSO ") + "\n", "green"))

        globais.saldo -= valor
        globais.extrato += f"Pagamento de {descricao} →"
        globais.extrato += colored(f" {valor:.2f} €\n", "red")

    else: print(colored("\n" + "{:-^30}".format(" VALOR INVÁLIDO ") + "\n", "red"))

    print(f"\nSaldo atual {globais.saldo:.2f} € \n")

def extrato():
    cprint("\n" + "{:-^30}".format(" EXTRATO BANCÁRIO ") + "\n", "black", "on_white")
    print(globais.extrato)
    print(f"\nSaldo atual:", end="")
    print(colored(f" {globais.saldo:.2f} € \n", "green"))


def exibirMenu():
    print("\n1 - Levantamentos.")
    print("2 - Depósitos.")
    print("3 - Pagamentos.")
    print("4 - Extrato.")
    print("\n0 - Sair.\n")