import os
import time

def temp_k(celsius):
    kelvin = celsius + 273.15
    print(f"\n→ {celsius}ºC = {kelvin:.1f} K\n")

def temp_f(celsius):
        farh = (celsius * 1.8) + 32
        print(f"\n→ {celsius}ºC = {farh:.1f}ºF\n")

#funções especiais
def limpa():
    if(os.name == "nt"): os.system("cls")
    else:
        os.system("clear")

def aguarde(tempo): time.sleep(tempo)