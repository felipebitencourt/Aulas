print("\n\n")

print("=== Clínica de Nutrição ===\n")

nome = input("Digite o nome do(a) paciente → ")
peso = float(input("Digite o peso do(a) paciente (Kg)→ "))
alt = float(input("Digite a altura do(a) paciente (m) → "))
imc = peso / (alt ** 2)

print(f"\nO(A) paciente ({nome}) está com IMC de ({imc:.1f}).")

print("\n\n")