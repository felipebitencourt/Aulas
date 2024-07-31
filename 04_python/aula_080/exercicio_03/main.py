from funcoes import *
from Usuario import *
import globais

limpa()

while(True):
    limpa()
    print("--- Lista Original ---\n")

    for u in globais.usuarios: u.toString()

    print()

    login_digitado = input("- Login: ")
    senha_digitada = input("- Senha: ")

    if(verificarLogin(login_digitado, senha_digitada)):
        print("--- SUCESSO! ---")
        break
    else:
        print("\n--- LOGIN INVÁLIDO ---")

print("\n\n")