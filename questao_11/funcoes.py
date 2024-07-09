import os

# Funções
def calcComissao(salario_fixo, comissao_fixa, total_vendas, valor_total_vendas):
  resultado = salario_fixo + (total_vendas * comissao_fixa) + (valor_total_vendas * 0.05)
  return resultado




# Funções Especiais
def limpa():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")