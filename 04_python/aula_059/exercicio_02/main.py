import math

print("\n\n")

texto = "Codemaster"

print("=== Método 'Format' ===\n")

print(f"Nome 1: {texto:<20}")
print(f"Nome 1: {texto:>20}")
print(f"Nome 1: {texto:^20}\n")

print("=" * 30, "\n")

print(f"Nome 1: {texto:*<20}")
print(f"Nome 2: {texto:*>20}")
print(f"Nome 3: {texto:*^20} \n")

print("=" * 30, "\n")

print(f"{math.pi:.1f}")
print(f"{math.pi:.2f}")
print(f"{math.pi:.3f}")
print(f"{math.pi:.6f}")

print("\n\n")