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
    print("{:-^30}".format(" Depósitos "), "\n")
    valor = float(input("→ Valor a ser depositado: "))

    if(valor > 0):
        print("\n--- SUCESSO ---\n")
        globais.saldo += valor
    else: print("\n--- VALOR INVÁLIDO ---\n")
    print(f"\nSaldo atual {globais.saldo:.2f} € \n")

def levantar():
    print("{:-^30}".format(" Levantamentos "), "\n")
    valor = float(input("→ Valor a ser levantado: "))

    if(valor > 0 and valor <= globais.saldo): 
        print("\n--- SUCESSO ---\n")
        globais.saldo -= valor
    else: print("\n--- VALOR INVÁLIDO ---\n")
    print(f"\nSaldo atual {globais.saldo:.2f} € \n")

def pagar():
    print("{:-^30}".format(" Pagamentos "), "\n")
    descricao = input("→ Descrição do pagamento: ")
    valor = float(input("→ Valor à pagar: "))

    if(valor > 0 and valor <= globais.saldo): 
        print("\n--- SUCESSO ---\n")
        globais.saldo -= valor
        globais.extrato += f"Pagamento de {descricao} → {valor:.2f} €\n"
    else: print("\n--- VALOR INVÁLIDO ---\n")
    print(f"\nSaldo atual {globais.saldo:.2f} € \n")

def extrato():
    print("\n--- EXTRATO BANCÁRIO ---\n")
    print(globais.extrato)

def exibirMenu():
    print("\n1 - Levantamentos.")
    print("2 - Depósitos.")
    print("3 - Pagamentos.")
    print("4 - Extrato.")
    print("\n5 - Sair.\n")