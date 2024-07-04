print("\n\n")

print("{:=^30}".format("INÍCIO"), "\n")

def calcularIMC(peso, altura):
    imc = peso / (altura ** 2)
    print(f"O IMC é [{imc:.1f}]\n")

calcularIMC()
calcularIMC()
calcularIMC()
calcularIMC()


print("{:=^30}".format("FIM"), "\n")

print("\n\n")