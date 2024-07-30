from funcoes import *
from Usuario import *
import globais

limpa()

while(True):
    limpa()

    
    for u in globais.usuarios: u.toString()

    login_digitado = input("- Login: ")
    senha_digitada = input("- Senha: ")

print("\n\n")