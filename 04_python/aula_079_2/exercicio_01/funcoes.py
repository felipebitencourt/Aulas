import os
import time
import globais

# Funções
def exibirMenu():
  animar("Aguarde")
  print("=== Loja Python ===\n")
  print("1 - Registar produto.")
  print("2 - Editar produto.")
  print("3 - Apagar produto.")
  print("4 - Listar produtos.\n")
  print("5 - Vender.")
  print("6 - Listar vendas.\n")
  print("0 - Sair.\n")
  return int(input("- Opção: "))

def registarProduto():
  print("--- Registar Produto ---\n")
  nome = input("- Digite o nome do novo produto: ")
  if(not jaExisteNome(nome)):
    preco = float(input("- Digite o preço deste produto: "))
    quantidade = int(input("- Digite a quantidade deste produto: "))
    globais.produtos.append(novoProduto(nome, preco, quantidade))
    print("\n--- SUCESSO! ---")
  else: print("\n--- PRODUTO JÁ REGISTADO! ---")

def listarProdutos(com_titulo):
  if(com_titulo): print("--- Lista de Produtos ---\n")
  for i in range(len(globais.produtos)):
    toStringProduto(i, globais.produtos[i])

def editarProduto(): 
  print("--- Editar Produto ---\n")
  listarProdutos(False)
  id = int(input("\n- Digite o ID do produto que desejas editar: ")) - 1
  if(id >= 0 and id < len(globais.produtos)):
    print()
    toStringProduto(id, globais.produtos[id])
    print("\n--- Menu de Edição ---\n")
    print("1 - Nome.")
    print("2 - Preço.")
    print("3 - Quantidade.\n")
    print("0 - Cancelar.\n")
    opcao = int(input("- Opção: "))

    print()

    p = globais.produtos[id]

    if(opcao == 1):
      nome = input(f"- Digite o NOME para substituir ({p['nome']}): ")
      if(not jaExisteNome(nome)):
        p["nome"] = nome
        print("\n--- SUCESSO! ---")
      else: print("\n--- PRODUTO JÁ REGISTADO! ---")

    elif(opcao == 2):
      p["preco"] = float(input(f"- Digite o PREÇO para substituir ({p['preco']:.2f} €): "))
      print("\n--- SUCESSO! ---")

    elif(opcao == 3):
      p["quantidade"] = int(input(f"- Digite a QUANTIDADE para substituir ({p['quantidade']}): "))
      print("\n--- SUCESSO! ---")

    elif(opcao == 0): print("\n--- OPERAÇÃO CANCELADA! ---")

    else: print("--- OPÇÃO INVÁLIDA ---")
    
  else: print("\n--- ID INVÁLIDO! ---")

def apagarProduto():
  print("--- Apagar Produto ---\n")
  listarProdutos(False)
  id = int(input("\n- Digite o ID do produto que desejas apagar: ")) - 1
  if(id >= 0 and id < len(globais.produtos)):
    resposta = input(f"\n- Tem certeza de que desejas apagar o produto ({globais.produtos[id]['nome']})? ")
    if(resposta.lower() == "sim"):
      globais.produtos.pop(id)
      print("\n--- SUCESSO! ---")
    else: print("\n--- OPERAÇÃO CANCELADA! ---")
  else: print("\n--- ID INVÁLIDO! ---")

def vender():
  print("--- Vender Produto ---\n")
  listarProdutos(False)
  id = int(input("\n- Digite o ID do produto que desejas vender: ")) - 1
  if(id >= 0 and id < len(globais.produtos)):
    p = globais.produtos[id]
    quantidade = int(input(f"\n- Digite a quantidade de ({p['nome']}) que será vendida: "))
    if(quantidade <= p["quantidade"] and quantidade > 0):
      p["quantidade"] -= quantidade
      globais.vendas.append(novaVenda(p["nome"], p["preco"], quantidade))
      print()
      globais.total_vendas += toStringVenda(len(globais.vendas)-1, globais.vendas[-1])
      print("\n--- SUCESSO! ---")
    else: print("\n--- QUANTIDADE INVÁLIDA! ---")
  else: print("\n--- ID INVÁLIDO! ---")

def listarVendas():
  print("--- Lista de Vendas ---\n")
  for i in range(len(globais.vendas)):
    toStringVenda(i, globais.vendas[i])
  print(f"\nValor total das vendas: ({globais.total_vendas:.2f} €)")




# Funções Auxiliares
def novoProduto(nome, preco, quantidade):
  novo_produto = {
    "nome": nome,
    "preco": preco,
    "quantidade": quantidade
  }
  return novo_produto

def jaExisteNome(nome):
  for p in globais.produtos:
    if(p["nome"].lower() == nome.lower()): return True
  return False

def toStringProduto(i, p):
  print(f"#{i+1} - (Nome: {p['nome']}) (Preço: {p['preco']:.2f} €) (Quantidade: {p['quantidade']}).")

def init():
  globais.produtos.append(novoProduto("Cadeira", 99.99, 100))
  globais.produtos.append(novoProduto("Mesa", 149.99, 50))
  globais.produtos.append(novoProduto("Headset Gamer", 58.45, 32))
  globais.produtos.append(novoProduto("Papel A4", 3.00, 45))
  globais.produtos.append(novoProduto("Viola", 390.00, 5))

def novaVenda(nome, preco, quantidade):
  nova_venda = {
    "nome": nome,
    "preco": preco,
    "quantidade": quantidade
  }
  return nova_venda

def toStringVenda(i, v):
  valor_total = v["preco"] * v["quantidade"]
  print(f"Venda #{i+1} - {v['nome']} ({v['preco']} €) x ({v['quantidade']} uni.) = ({valor_total:.2f} €)")
  return valor_total










# Funções Especiais
def limpa():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def aguarde(tempo): time.sleep(tempo)

def animar(frase):
  tempo = 0.075
  limpa()
  frase += "..."

  for letra in frase:
    print(letra, end="", flush=True)
    aguarde(tempo)

  limpa()

def carregueEnter():
  input("\nCarregue <ENTER> para continuar...")