import os

def temp_k(celsius):
    kelvin = celsius + 273.15
    print(f"\n→ {celsius}ºC = {kelvin:.1f} K\n")

def temp_f(celsius):
        farh = (celsius * 1.8) + 32
        print(f"\n→ {celsius}ºC = {farh:.1f}ºF\n")

def votos():
    validos = int(input("→ Número de votos válidos: "))
    brancos = int(input("→ Número de votos brancos: "))
    nulos = int(input("→ Número de votos nulos: "))
    total = validos + brancos + nulos
    percValidos = (validos / total) * 100
    percBrancos = (brancos / total) * 100
    percNulos = (nulos / total) * 100
    print(f"\n→ Porcentagem dos votos válidos = {percValidos:.2f}%.")
    print(f"\n→ Porcentagem dos votos brancos = {percBrancos:.2f}%.")
    print(f"\n→ Porcentagem dos votos nulos = {percNulos:.2f}%.")
    print(f"\n→ Total de votos = {total}.")

#funções especiais
def limpa():
    if(os.name == "nt"): os.system("cls")
    else:
         os.system("clear")