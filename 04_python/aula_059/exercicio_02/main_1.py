print("\n\n")

nome_1 = "Felipe"
nome_2 = "João"
nome_3 = "Maria"

saldo_1 = 15.20
saldo_2 = 1.3
saldo_3 = 23.7

print(f"Nome 1: {nome_1:>20}")     #alinhar à direita (com espaços em branco)
print(f"Nome 2: {nome_2:<20}X")    #alinhar à esquerda (com espaços em branco)
print(f"Nome 3: {nome_3:^20}")     #alinhar ao centro (com espaços em branco)

print("=" * 40)

print(f"Nome 1: {nome_1:.>20}")
print(f"Nome 2: {nome_2:.<20}")
print(f"Nome 3: {nome_3:.^20}")

print(f"Saldo 1: {saldo_1:.3f}")
print(f"Saldo 2: {saldo_2:.3f}")
print(f"Saldo 3: {saldo_3:.3f}")

print("\n\n")