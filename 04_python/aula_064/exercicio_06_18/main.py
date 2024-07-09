from funcoes import *      #neste caso, as funções

limpa()

print("{:=^20}".format("INÍCIO"), "\n")

def idade():
    ano = int(input("→ Em que ano você nasceu?: "))
    anoAtual = int(input("→ Em que ano estamos?: "))
    resultado = anoAtual - ano
    if(resultado >= 18):
        print(f"\n→ Você poderá votar neste ano!")
    else:
        print(f"\n→ Você NÃO poderá votar neste ano!")

idade()

print("\n", "{:=^20}".format("FIM"))

print("\n\n")