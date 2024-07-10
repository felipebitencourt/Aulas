from funcoes import *

limpa()

print("{:=^20}".format("INÍCIO"), "\n")

resposta = ""
while(resposta.lower() != "sim"):
    resposta = input("- Vc passou? ")

print("\nParabéns!")

print("\n", "{:=^20}".format("FIM"))

print("\n\n")