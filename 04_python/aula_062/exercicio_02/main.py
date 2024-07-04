print("\n\n")

print("{:=^20}".format("INÍCIO"), "\n")

opcao = input("- Você deseja converter para Kelvin ou Fahrenheit? (K/F)? \n")

def temp_k(celsius):
    kelvin = celsius + 273.15
    print(f"\n→ {celsius}ºC = {kelvin:.1f} K\n")

def temp_f(celsius):
        farh = (celsius * 1.8) + 32
        print(f"\n→ {celsius}ºC = {farh:.1f}ºF\n")

if(opcao.lower() == "k"):
    temp_k(float(input("\n- Digite a temperatura em ºC: ")))

elif(opcao.lower() == "f"):
    temp_f(float(input("\n- Digite a temperatura em ºC: ")))
    
else: print("\n OPÇÃO INVÁLIDA")


print("\n", "{:=^20}".format("FIM"))

print("\n\n")