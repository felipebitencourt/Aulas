from funcoes import *

limpa()

salario_fixo = float(input("- Digite o salário fixo: "))
comissao_fixa = float(input("- Digite a comissão por venda: "))
total_vendas = float(input("- Digite o total de carros vendidos: "))
valor_total_vendas = float(input("- Digite o valor total das vendas: "))

print(f"\nValor total a ser recebido: ( {calcComissao(salario_fixo, comissao_fixa, total_vendas, valor_total_vendas)} € )")

print("\n\n")