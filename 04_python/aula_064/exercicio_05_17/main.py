from funcoes import *      #neste caso, as funções

limpa()

print("{:=^20}".format("INÍCIO"), "\n")

n1 = float(input("→ Digite nota da 1ª av: "))
n2 = float(input("→ Digite nota da 2ª av: "))
resultado = (n1 + n2) / 2

def media():
    print(f"→ Sua média = {resultado}.")

if(resultado >= 6):
    print("\n→ Parabéns, você está aprovado!")
else:
    print("\n→ Precisa estudar um pouco mais.")

media()

print("\n", "{:=^20}".format("FIM"))

print("\n\n")