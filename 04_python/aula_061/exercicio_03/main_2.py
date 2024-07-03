print("\n\n")
print("{:=^20}".format(" INÍCIO "), "\n")

numero = int(input("- Digite um número inteiro: "))
resto = numero % 2

print()

if(resto == 0):
    print("É PAR!")

else:
    print("É ÍMPAR!")

print("\n", "{:=^20}".format(" FIM "))
print("\n\n")

x = 50

# utilizar as operações de forma abreviada

x -= 3
x += 5
x /= 1
x *= 9