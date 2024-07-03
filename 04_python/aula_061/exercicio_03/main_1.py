print("\n\n")

print("{:=^20}".format("INÍCIO"), "\n")

chuva = input("- Está a chover? ")

print()

if(chuva.lower() =="sim" or chuva.lower() =="s"):
    
    sair = input("- Você quer sair de casa? ")

    print()

    if(sair.lower =="sim" or chuva.lower() =="s"): print("Pegar o guarda-chuva e ir ao cinema!")
    else: print("Pedir iFood.")

else: print("Ir ao parque.")


print("\n", "{:=^20}".format("FIM"))

print("\n\n")