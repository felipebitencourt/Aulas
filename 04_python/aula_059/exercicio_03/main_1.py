print("\n\n")

nome = input("Digite seu nome → ")
idade = int(input("Digite sua idade → "))        #identificar como número inteiro
alt = float(input("Digite sua altura → "))       #identificar como número decimal
dobro_1 = idade * 2
dobro_2 = alt * 2

print(f"Boa noite {nome}! Você tem: {idade} anos!")
print(f"O dobro da sua idade é ({dobro_1})")
print(f"O dobro da sua altura é ({dobro_2:.f})")

print("\n\n")