from funcoes import *
from Usuario import *
limpa()

while(True):
    limpa()

    for u in globais.usuarios: u.toString()

    print()
    
    login_digitado = input("→ Login: ")
    senha_digitada = input("→ Senha: ")
    
    if(verificarLogin(login_digitado, senha_digitada)):
        print("\n--- SUCESSO! ---")
        break
    else:
        print("\n--- LOGIN INVÁLIDO ---")
    
    apertarEnter()

print("\n\n")