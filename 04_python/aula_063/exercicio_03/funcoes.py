import os

def temp_k(celsius):
    kelvin = celsius + 273.15
    print(f"\n→ {celsius}ºC = {kelvin:.1f} K\n")

def temp_f(celsius):
        farh = (celsius * 1.8) + 32
        print(f"\n→ {celsius}ºC = {farh:.1f}ºF\n")

def idadeDias():
    idade_a = int(input("→ Digite sua idade em anos: "))
    idade_b = int(input("→ Digite os meses: "))
    idade_c = int(input("→ Digite os dias: "))
    resultado = (idade_a * 365) + (idade_b * 30) + (idade_c)
    print(f"\n→ Sua idade é = {resultado} dias.")

#funções especiais
def limpa():
    if(os.name == "nt"): os.system("cls")
    else:
         os.system("clear")