import os
import time

def candidatura(idade, con):
    if(con.lower() != "sim" and con.lower() != "não" and con.lower() != "nao"):
        print("ERRO NOS DADOS INFORMADOS, TENTE NOVAMENTE.")
    elif(idade >= 18):
        if(con.lower() == "sim"):
            print("APROVADO PARA O ESTÁGIO!")
        else:
            print("NÃO APROVADO PARA O ESTÁGIO.")
    else:
        if(con.lower() == "sim"):
            print("APROVADO PARA A ESCOLA DE PROGRAMAÇÃO!")
        else:
            print("NÃO APROVADO PARA A ESCOLA DE PROGRAMAÇÃO.")

#funções especiais
def limpa():
    if(os.name == "nt"): os.system("cls")
    else: os.system("clear")

def aguarde(tempo): time.sleep(tempo)