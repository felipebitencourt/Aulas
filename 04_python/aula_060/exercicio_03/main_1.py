print("\n\n")

resposta = "sim"
saldo = 25.00

condicao_1 = (resposta.lower() == "sim" or resposta.lower() == "s")
condicao_2 = (resposta.lower() == "sim" or saldo >= 20)
condicao_3 = (resposta.lower() == "sim" and saldo >= 20)
condicao_4 = (not saldo > 20)
condicao_5 = ((resposta.lower() == "sim" or resposta.lower() == "s") and saldo >= 20)

print(f"Condição 1: {condicao_1}")
print(f"Condição 2: {condicao_2}")
print(f"Condição 3: {condicao_3}")
print(f"Condição 4: {condicao_3}")
print(f"Condição 5: {condicao_3}")

print("\n\n")