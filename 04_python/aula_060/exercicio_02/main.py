print("\n\n")

print("{:=^20}".format("INÍCIO"), "\n")

resposta = input("- A lâmpada está queimada? (Y/N): ")

print()

if(resposta.lower() == "y"):
    print("Retire a lâmpada queimada.")
    print("Ponha a lâmpada nova.")
    
print("Ligue o interruptor.")

print("\n", "{:=^20}".format("FIM"))

print("\n\n")