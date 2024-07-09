import os
import time

def candidatura(idade, con):
    if(con.lower() != "sim" and con.lower() != "não" and con.lower() != "nao"):
        print("\nERRO NOS DADOS INFORMADOS, TENTE NOVAMENTE.")
    elif(idade >= 18):
        if(con.lower() == "sim"):
            print("\nAPROVADO PARA O ESTÁGIO!")
        else:
            print("\nNÃO APROVADO PARA O ESTÁGIO.")
    else:
        if(con.lower() == "sim"):
            print("\nAPROVADO PARA A ESCOLA DE PROGRAMAÇÃO!")
        else:
            print("\nNÃO APROVADO PARA A ESCOLA DE PROGRAMAÇÃO.")

#funções especiais
def limpa():
    if(os.name == "nt"): os.system("cls")
    else: os.system("clear")

def aguarde(tempo): time.sleep(tempo)