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


def registrarProduto():

    cprint("{:=^40}".format(" Registrar Produto ") + "\n", "black", "on_white")

    nome = input("→ Digite o nome do novo produto: ")
    
    if(not nomeExiste(nome)):
        preco = float(input("→ Digite o preço do novo produto: "))
        quantidade = int(input("→ Digite a quantidade deste produto: "))
        globais.produtos.append(novoProduto(nome, preco, quantidade))
        print(colored("\n" + "{:-^40}".format(" SUCESSO ") + "\n", "green"))

    else:
        print(colored("\n" + "{:-^40}".format(" PRODUTO JÁ REGISTRADO ") + "\n", "red"))


def menuEditar():
    cprint("\n" + "{:=^40}".format(" Menu Editar ") + "\n", "black", "on_white")
    print("1 - Nome.")
    print("2 - Preço.")
    print("3 - Quantidade.")
    print("\n0 - Cancelar.")
    return int(input("\n→ Opção: "))

def editarProduto():

    cprint("{:=^40}".format(" Editar colaborador ") + "\n", "black", "on_white")

    listarProdutos(False)
    
    id = int(input("\n→ Digite o ID do produto que deseja editar: ")) - 1

    if(id > 0 and id <= len(globais.produto)):

        opcao_editar = menuEditar()

        if(opcao_editar == 1):
  
            novo_nome = input(f"→ Digite o novo nome para substituir ( {globais.produto[id]['nome']} ): ")
            if(not nomeExiste(novo_nome)):
                globais.produto['nome'] = novo_nome
                print(colored("\n" + "{:-^40}".format(" SUCESSO! ") + "\n", "green"))

            else:
                print(colored("\n" + "{:-^40}".format(" PRODUTO JÁ REGISTRADO! ") + "\n", "red"))

        elif(opcao_editar == 2):
            novo_preco = input(f"→ Digite o novo preço para substituir ( {globais.produto[id]['preco']:.2f} ): ")
            globais.produto['preco'] = novo_preco
            print(colored("\n" + "{:-^40}".format(" SUCESSO! ") + "\n", "green"))

        elif(opcao_editar == 3):
            globais.total_produtos -= globais.produto['quantidade']

            nova_quantidade = int(input(f"→ Digite o novo ORDENADO para substituir ( {globais.produto[id]['quantidade']} €): "))
            
            globais.produto[id][2] = nova_quantidade
            globais.total_produtos += nova_quantidade

            
            print(colored("\n" + "{:-^40}".format(" SUCESSO! ") + "\n", "green"))

        elif(opcao_editar == 0): print(colored("\n" + "{:-^40}".format(" OPERAÇÃO CANCELADA! ") + "\n", "red"))
        else: print(colored("\n" + "{:-^40}".format(" OPÇÃO INVÁLIDA! ") + "\n", "red"))

    else:
        print(colored("\n" + "{:-^40}".format(" ID INVÁLIDO! ") + "\n", "red"))


def apagarProduto():

    cprint("{:=^40}".format(" Apagar colaborador ") + "\n", "black", "on_white")

    listarProdutos(False)
    
    id = int(input("\n→ Digite o ID do produto que deseja apagar: ")) - 1

    if(id > 0 and id <= len(globais.produto)):
        resposta = input(f"Tem certeza que deseja apagar ({globais.produto[id]['nome']}).")

        if(resposta.lower() == "sim"):
            print(colored("\n" + "{:-^40}".format(f" ( {globais.produto.pop(id)} ) APAGADO COM SUCESSO! ") + "\n", "green"))
        elif(resposta.lower() == "nao"):
            print(colored("\n" + "{:-^40}".format(" OPERAÇÃO CANCELADA! ") + "\n", "red"))
        else:
            print(colored("\n" + "{:-^40}".format(" OPÇÃO INVÁLIDA! ") + "\n", "red"))
        

    else:
        print(colored("\n" + "{:-^40}".format(" ID INVÁLIDO! ") + "\n", "red"))



def exibirMenu():
    animar2("Aguarde")
    cprint("{:=^40}".format(" Loja Python ") + "\n", "black", "on_white")
    print("1 - Registrar produto.")
    print("2 - Editar produto.")
    print("3 - Apagar produto.")
    print("4 - Lista de produtos.")
    print("\n5 - Vendas.")
    print("6 - Listar Vendas.")
    print("\n0 - Sair")
    return int(input("\n→ Opção: "))




# def apagarColaborador():

#     cprint("{:=^40}".format(" Apagar colaborador ") + "\n", "black", "on_white")

#     listarColaborador(False)
    
#     id = int(input("\n→ Digite o número do colaborador(a) que deseja apagar: "))

#     if(id > 0 and id <= len(globais.colaborador)):
#         print(colored("\n" + "{:-^40}".format(f" ( {globais.colaborador[id-1][0]} ) APAGADO COM SUCESSO! ") + "\n", "green"))
        
#         globais.ordenado -= globais.colaborador[id-1][2]
#         globais.total_colaboradores -= 1
#         globais.colaborador.pop(id-1)

#     else:
#         print(colored("\n" + "{:-^40}".format(" ID INVÁLIDO! ") + "\n", "red"))

def listarProdutos(com_titulo):
    if(com_titulo): cprint("{:=^40}".format(" Lista de Produtos ") + "\n", "black", "on_white")
    for i in range(len(globais.produtos)): toString(i, globais.produtos[i])
    print()



#         FORMA DE FAZER A CONTAGEM DO ORDENADO JUNTO NA LISTAGEM DO COLABORADOR
# def listarColaborador(com_titulo):
#     if(com_titulo): cprint("{:=^40}".format(" Lista dos colaboradores ") + "\n", "black", "on_white")
#     ordenado = 0 

#     for i in range(len(globais.colaborador)): 
#         toString(i, globais.colaborador[i])
#         if(com_titulo): ordenado += globais.colaborador[i][2]

#     if(com_titulo): 
#         print(f"\nTotal de colaboradores: ({globais.total_colaboradores})")
#         print(f"Ordenado mensal da equipa: ({globais.ordenado:.2f} €)")
#     print()

def novoProduto(nome, preco, quantidade):
    novo_produto = {
        "nome": nome,
        "preco": preco,
        "quantidade": quantidade
    }
    return novo_produto

def toString(i, produto):
    print(f"#{i+1} - (Nome: {produto['nome']}) (Preco: {produto['preco']:.2f}) (Quantidade: {produto['quantidade']} €)")


def nomeExiste(nome):
    for p in globais.produtos:
        if(p["nome"] == nome): return True
    return False

def init():
  globais.produto.append(novoProduto("Rex", 75, 10))
  globais.produto.append(novoProduto("Max", 12, 5))
  globais.produto.append(novoProduto("Pingo", 19, 3))
  globais.produto.append(novoProduto("Spike", 13., 15))