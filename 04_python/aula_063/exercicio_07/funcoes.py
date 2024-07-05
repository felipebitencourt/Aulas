import os

def temp_k(celsius):
    kelvin = celsius + 273.15
    print(f"\n→ {celsius}ºC = {kelvin:.1f} K\n")

def temp_f(celsius):
        farh = (celsius * 1.8) + 32
        print(f"\n→ {celsius}ºC = {farh:.1f}ºF\n")

def salario():
    totalCarros = int(input("→ Digite quantos carros você vendeu: "))
    totalVendas = int(input("→ Digite o quanto recebeu das vendas: "))
    salarioFixo = int(input("→ Digite seu salário fixo: "))
    carroVendido = int(input("→ Digite o valor de cada carro vendido: "))
    porcCarro = ((((totalVendas-(carroVendido*totalCarros))) * 100) / (carroVendido*totalCarros)) * 0.01
    resultado = salarioFixo + (totalVendas * 1.05) + (porcCarro * carroVendido)
    print(f"→ Seu salário será € {resultado:.2f}")

#funções especiais
def limpa():
    if(os.name == "nt"): os.system("cls")
    else:
         os.system("clear")