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


# def novaPessoa(nome, idade, morada):
#     pessoa = [nome, idade, morada]
#     return pessoa
    

# def toString(i, pessoa):
#     print(f"{i+1} - {pessoa[0]} tem {pessoa[1]} anos e mora em {pessoa[2]}.")


def novoColaborador(nome, cargo, ordenado):
    colaborador = [nome, cargo, ordenado]
    return colaborador
    

def toString(i, colaborador):
    print(f"ID: ({i+1}) | (Nome: {globais.colaborador[i][0]}) | (Cargo: {globais.colaborador[i][1]}) | (Ordenado: {globais.colaborador[i][2]:.2f} €)")

def exibirMenu():
    animar2("Aguarde")
    cprint("{:=^40}".format(" Gestão de Colaboradores ") + "\n", "black", "on_white")
    print("1 - Novo colaborador.")
    print("2 - Editar colaborador.")
    print("3 - Apagar colaborador.")
    print("\n4 - Lista de colaboradores.")
    print("\n0 - Sair")
    return int(input("\n→ Opção: "))

def registrarColaborador():

    cprint("{:=^40}".format(" Novo Colaborador ") + "\n", "black", "on_white")

    nome = input("→ Digite o NOME do(a) novo(a) colaborador(a): ")
    cargo = input("→ Digite o CARGO do(a) novo(a) colaborador(a): ")
    ordenado = float(input("→ Digite o ORDENADO do(a) novo(a) colaborador(a): "))

    if(not (nome in globais.colaborador)):
        globais.colaborador.append(novoColaborador(nome, cargo, ordenado))
        globais.total_colaboradores += 1
        globais.ordenado += ordenado
        print(colored("\n" + "{:-^40}".format(" SUCESSO ") + "\n", "green"))

    else:
        print(colored("\n" + "{:-^40}".format(" PESSOA JÁ REGISTRADA ") + "\n", "red"))

def menuEditar():
    cprint("\n" + "{:=^40}".format(" Editar ") + "\n", "black", "on_white")
    print("1 - Nome.")
    print("2 - Cargo.")
    print("3 - Ordenado.")
    print("\n0 - Cancelar.")
    return int(input("\n→ Opção: "))

def editarColaborador():

    cprint("{:-^40}".format(" Editar colaborador ") + "\n", "black", "on_white")

    for i in range(len(globais.colaborador)): toString(i, globais.colaborador[i])
    
    id = int(input("\n→ Digite o ID do colaborador(a) que deseja editar: "))

    if(id > 0 and id <= len(globais.colaborador)):

        opcao_editar = menuEditar()

        if(opcao_editar == 1):
  
            novo_nome = input(f"→ Digite o novo NOME para substituir ( {globais.colaborador[id-1][0]} ): ")
            if(not (novo_nome in globais.colaborador)):
                globais.colaborador[id-1][0] = novo_nome
                print(colored("\n" + "{:-^40}".format(" SUCESSO! ") + "\n", "green"))

            else:
                print(colored("\n" + "{:-^40}".format(" COLABORADOR(A) JÁ REGISTRADO(A)! ") + "\n", "red"))

        elif(opcao_editar == 2):
            novo_cargo = input(f"→ Digite o novo CARGO para substituir ( {globais.colaborador[id-1][1]} ): ")
            globais.colaborador[id-1][1] = novo_cargo
            print(colored("\n" + "{:-^40}".format(" SUCESSO! ") + "\n", "green"))

        elif(opcao_editar == 3):
            globais.ordenado -= globais.colaborador[id-1][2]
            novo_ordenado = float(input(f"→ Digite o novo ORDENADO para substituir ( {globais.colaborador[id-1][2]} €): "))
            globais.colaborador[id-1][2] = novo_ordenado
            globais.ordenado += novo_ordenado

            
            print(colored("\n" + "{:-^40}".format(" SUCESSO! ") + "\n", "green"))

        elif(opcao_editar == 0): print(colored("\n" + "{:-^40}".format(" OPERAÇÃO CANCELADA! ") + "\n", "red"))
        else: print(colored("\n" + "{:-^40}".format(" OPÇÃO INVÁLIDA! ") + "\n", "red"))

    else:
        print(colored("\n" + "{:-^40}".format(" ID INVÁLIDO! ") + "\n", "red"))

def apagarColaborador():

    cprint("{:-^40}".format(" Apagar colaborador ") + "\n", "black", "on_white")

    for i in range(len(globais.colaborador)): toString(i, globais.colaborador[i])
    
    id = int(input("\n→ Digite o número do colaborador(a) que deseja apagar: "))

    if(id > 0 and id <= len(globais.colaborador)):
        print(colored("\n" + "{:-^40}".format(f" ( {globais.colaborador[id-1][0]} ) APAGADO COM SUCESSO! ") + "\n", "green"))
        globais.ordenado -= globais.colaborador[id-1][2]
        globais.total_colaboradores -= 1
        globais.colaborador.pop(id-1)

    else:
        print(colored("\n" + "{:-^40}".format(" ID INVÁLIDO! ") + "\n", "red"))

def listarColaborador():
    cprint("{:-^40}".format(" Lista dos colaboradores ") + "\n", "black", "on_white")

    for i in range(len(globais.colaborador)): toString(i, globais.colaborador[i])

    print(f"\nTotal de colaboradores: ({globais.total_colaboradores})")
    print(f"Ordenado mensal da equipa: ({globais.ordenado:.2f} €)")
    print()