print("\n\n")

print("{:=^20}".format("INÍCIO"), "\n")

temp = float(input("- Qual é a temperatura atual? : "))

print()

if(temp <= 18): print("Usar roupas GROSSAS.")
elif(temp < 28): print("Usar roupas NORMAIS.")
else: print("Usar roupas LEVES.")
    
chuva = input("\n- Está a chover? (Y/N): ")

print()

if(chuva.lower() == "y" or chuva.lower() =="s"):
    print("Pegar guarda-chuva.\n")

print("Ir passear!")

print("\n", "{:=^20}".format("FIM"))

print("\n\n")