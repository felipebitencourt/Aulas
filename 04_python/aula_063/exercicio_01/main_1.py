print("\n\n")

print("{:=^30}".format("INÍCIO"), "\n")

def calcularIMC():
    nome = input("- Digite o nome do(a) paciente: ")
    peso = float(input("- Digite o seu peso (Kg): "))
    altura = float(input("- Digite a sua altura (m): "))
    imc = peso / (altura ** 2)
    print(f"O IMC do(a) [{nome}] é [{imc:.1f}]\n")

calcularIMC()
calcularIMC()
calcularIMC()
calcularIMC()


print("{:=^30}".format("FIM"), "\n")

print("\n\n")