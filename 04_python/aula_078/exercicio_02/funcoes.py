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
    tempo = 0.07
    limpa()

    frase += "..."

    for letra in frase:
        print(letra, end="", flush=True)
        aguarde(tempo)

    limpa()

def exibirMenu():
    animar2("Aguarde")
    cprint("{:-^40}".format(" Cadastro de Pessoas ") + "\n", "black", "on_white")
    print("\n1 - Cadastrar nova pessoas.")
    print("2 - Editar pessoa.")
    print("3 - Apagar pessoa.")
    print("\n4 - Lista de todas as pessoas.")
    print("\n0 - Sair")
    return int(input("\n→ Opção: "))

def registrar():

    cprint("{:-^40}".format(" Cadastro Novas Pessoa ") + "\n", "black", "on_white")

    novo_nome = input("→ Digite o nome: ")
    if(not (novo_nome in globais.pessoas)):
        globais.pessoas.append(novo_nome)
        print(colored("\n" + "{:-^40}".format(" SUCESSO ") + "\n", "green"))

    else:
        print(colored("\n" + "{:-^40}".format(" PESSOA JÁ REGISTRADA ") + "\n", "red"))

def editarPessoas():

    cprint("{:-^40}".format(" Editar pessoas ") + "\n", "black", "on_white")

    listarPessoas(False)
    
    numero = int(input("\n→ Digite o número do aluno(a) que deseja editar: "))

    if(numero > 0 and numero <= len(globais.pessoas)):
        
        novo_nome = input(f"→ Digite o novo nome para substituir ( {globais.pessoas[numero-1]} ): ")
        if(not (novo_nome in globais.pessoas)):
            globais.pessoas[numero] = novo_nome
            print(colored("\n" + "{:-^40}".format(" SUCESSO ") + "\n", "green"))

        else:
            print(colored("\n" + "{:-^40}".format(" PESSOA JÁ REGISTRADA ") + "\n", "red"))

    else:
        print(colored("\n" + "{:-^40}".format(" ID INVÁLIDO ") + "\n", "red"))

def apagarPessoas():

    cprint("{:-^40}".format(" Apagar pessoas ") + "\n", "black", "on_white")

    listarPessoas(False)
    
    numero = int(input("\n→ Digite o número do aluno(a) que deseja apagar: "))

    if(numero > 0 and numero <= len(globais.pessoas)):
        print(colored("\n" + "{:-^40}".format(f" ( {globais.pessoas.pop(numero-1)} ) APAGADO COM SUCESSO ") + "\n", "green"))

    else:
        print(colored("\n" + "{:-^40}".format(" ID INVÁLIDO ") + "\n", "red"))

def listarPessoas(com_titulo):
    if(com_titulo): cprint("{:-^40}".format(" Lista de pessoas ") + "\n", "black", "on_white")
    for i in range(len(globais.pessoas)): print(f"ID: ( {i+1} ) - NOME: ( {globais.pessoas[i]} )")
    print()