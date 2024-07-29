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
    cprint("{:=^40}".format(" Loja Python ") + "\n", "black", "on_white")
    print("1 - Registrar produto.")
    print("2 - Editar produto.")
    print("3 - Apagar produto.")
    print("4 - Lista de produtos.")
    print("\n5 - Vendas.")
    print("6 - Listar Vendas.")
    print("\n0 - Sair")
    return int(input("\n→ Opção: "))

def novoProduto(nome, preco, quantidade):
    novo_produto = {
        "nome": nome,
        "preco": preco,
        "quantidade": quantidade
    }
    return novo_produto

def nomeExiste(nome):
    for prod in globais.produtos:
        if(prod["nome"] == nome): return True
    return False


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

def toString(i, produto, editar):
    if(editar):
        cprint(f"#{i+1} - (Nome: {produto['nome']}) (Preço: {produto['preco']:.2f} €) (Quantidade: {produto['quantidade']})", "yellow")
    else:
        print(f"#{i+1} - (Nome: {produto['nome']}) (Preço: {produto['preco']:.2f} €) (Quantidade: {produto['quantidade']})")

def listarProdutos(titulo):
    if(titulo): cprint("{:=^40}".format(" Lista de Produtos ") + "\n", "black", "on_white")
    for i in range(len(globais.produtos)): toString(i, globais.produtos[i], False)
   
def menuEditar():
    cprint("\n" + "{:=^40}".format(" Menu Editar ") + "\n", "black", "on_white")
    print("1 - Nome.")
    print("2 - Preço.")
    print("3 - Quantidade.")
    print("\n0 - Cancelar.")
    return int(input("\n→ Opção: "))

def editarProdutos():
    cprint("{:=^40}".format(" Editar colaborador ") + "\n", "black", "on_white")
    listarProdutos(False)

    id = int(input("\n→ Digite o ID do produto que deseja editar: ")) - 1

    print()
    print(f"{toString(id, globais.produtos[id], True)}")
    
    if(id >= 0 and id <len(globais.produtos)):

        opcao_editar = menuEditar()

        if(opcao_editar == 1):
            novo_nome = input(f"→ Digite o novo nome para substituir ( {globais.produtos[id]['nome']} ): ")
            if(not nomeExiste(novo_nome)):
                globais.produtos[id]['nome'] = novo_nome
                print(colored("\n" + "{:-^40}".format(" SUCESSO! ") + "\n", "green"))
            else:
                print(colored("\n" + "{:-^40}".format(" PRODUTO JÁ REGISTRADO! ") + "\n", "red"))

        elif(opcao_editar == 2):
            novo_preco = float(input(f"→ Digite o novo preço para substituir ( {globais.produtos[id]['preco']:.2f} ): "))
            globais.produtos[id]['preco'] = novo_preco
            print(colored("\n" + "{:-^40}".format(" SUCESSO! ") + "\n", "green"))

        
        elif(opcao_editar == 3):
            nova_quantidade = int(input(f"→ Digite a quantidade para substituir ( {globais.produtos[id]['quantidade']} ): ")) 
            globais.produtos[id]['quantidade'] = nova_quantidade
            print(colored("\n" + "{:-^40}".format(" SUCESSO! ") + "\n", "green"))

        elif(opcao_editar == 0): print(colored("\n" + "{:-^40}".format(" OPERAÇÃO CANCELADA! ") + "\n", "red"))
        else: print(colored("\n" + "{:-^40}".format(" OPÇÃO INVÁLIDA! ") + "\n", "red"))

    else:
        print(colored("\n" + "{:-^40}".format(" ID INVÁLIDO! ") + "\n", "red"))


def apagarProdutos():
    cprint("{:=^40}".format(" Apagar colaborador ") + "\n", "black", "on_white")
    listarProdutos(False)

    id = int(input("\n→ Digite o ID do produto que deseja apagar: ")) - 1

    if(id >= 0 and id < len(globais.produtos)):
        resposta = input(f"Tem certeza que deseja apagar ({globais.produtos[id]['nome']})? ")
        
        if(resposta.lower() == "sim"):
            print(colored("\n" + "{:-^40}".format(f" ( {globais.produtos.pop(id)['nome']} ) APAGADO COM SUCESSO! ") + "\n", "green"))
        elif(resposta.lower() == "nao"):
            print(colored("\n" + "{:-^40}".format(" OPERAÇÃO CANCELADA! ") + "\n", "red"))
        else:
            print(colored("\n" + "{:-^40}".format(" OPÇÃO INVÁLIDA! ") + "\n", "red"))    
    else:
        print(colored("\n" + "{:-^40}".format(" ID INVÁLIDO! ") + "\n", "red"))

def vender():
    cprint("{:=^40}".format(" Vender Produtos ") + "\n", "black", "on_white")
    listarProdutos(False)

    id = int(input("\n→ Digite o ID do produto que deseja vender: ")) - 1

    if(id >= 0 and id < len(globais.produtos)):

        produto_vendido = globais.produtos[id]
        nova_venda = int(input(f"\n- Digite a quantidade de ({produto_vendido['nome']}) que será vendida: "))
        
        if(nova_venda < produto_vendido["quantidade"]):

            resultado = produto_vendido['preco'] * nova_venda
            produto_vendido['quantidade'] = produto_vendido['quantidade'] - nova_venda

            # globais.vendas.append(novaVenda(produto_vendido['nome'], produto_vendido['preco'], produto_vendido['quantidade'], resultado))
            
            # listarVendas(False)

            globais.quantidade_vendas += 1
            globais.saldo += resultado
            i = globais.quantidade_vendas

            globais.historico_vendas += f"\nVenda #{i} - {produto_vendido['nome']} ({produto_vendido['preco']:.2f} €) x ({nova_venda} uni.) = ({resultado:.2f} €)"

            cprint(f"\nVenda #{i} - {produto_vendido['nome']} ({produto_vendido['preco']:.2f} €) x ({nova_venda} uni.) = ({resultado:.2f} €) ", "yellow")


            print(colored("\n" + "{:-^40}".format(" SUCESSO! ") + "\n", "green"))   
        
        else: print(colored("\n" + "{:-^40}".format(" ESTOQUE INSUFICIENTE! ") + "\n", "red"))   
    
    else:
        print(colored("\n" + "{:-^40}".format(" OPÇÃO INVÁLIDA! ") + "\n", "red"))


# def novaVenda(nome, preco, quantidade, resultado):
#     novo_venda = {
#         "nome": nome,
#         "preco": preco,
#         "quantidade": quantidade,
#         "resultado": resultado
#     }
#     return novo_venda

# def toStringVendas(i, vendas):
#     print(f"\nVenda #{i+1} - {vendas['nome']} ({vendas['preco']:.2f} €) x ({vendas['quantidade']} uni.) = ({vendas['resultado']:.2f} €) ")

def listarVendas():
    cprint("{:=^40}".format(" Lista de Vendas ") + "\n", "black", "on_white")
    print(globais.historico_vendas)
    print(f"\nValor total das vendas: ({globais.saldo:.2f} €)")
    # for i in range(len(globais.vendas)): toStringVendas(i, globais.vendas[i])