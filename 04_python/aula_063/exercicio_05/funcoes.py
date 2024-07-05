import os

def temp_k(celsius):
    kelvin = celsius + 273.15
    print(f"\n→ {celsius}ºC = {kelvin:.1f} K\n")

def temp_f(celsius):
        farh = (celsius * 1.8) + 32
        print(f"\n→ {celsius}ºC = {farh:.1f}ºF\n")

def valor():
    salario = float(input("→ Digite o seu salário atual: "))
    reajuste =  float(input("→ Quantos % terá de reajuste?: "))
    resultado = ((salario * reajuste) / 100) + salario
    print(f"\nSeu novo salário será € {resultado:.2f}")


#funções especiais
def limpa():
    if(os.name == "nt"): os.system("cls")
    else:
         os.system("clear")