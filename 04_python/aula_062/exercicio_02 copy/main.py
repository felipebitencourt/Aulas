import funcoes             #utilizar um arquivo importado
from funcoes import *      #neste caso, as funções

limpa()

print("{:=^20}".format("INÍCIO"), "\n")

opcao = input("- Você deseja converter para Kelvin ou Fahrenheit? (K/F)? \n")

if(opcao.lower() == "k"):
    temp_k(float(input("\n- Digite a temperatura em ºC: ")))

elif(opcao.lower() == "f"):
    temp_f(float(input("\n- Digite a temperatura em ºC: ")))
    
else: print("\n OPÇÃO INVÁLIDA")


print("\n", "{:=^20}".format("FIM"))

print("\n\n")