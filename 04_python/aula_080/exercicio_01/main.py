from funcoes import *
from Aluno import *

limpa()

a1 = Aluno("Fabrício Vidal", 28, "1Covilhã", 111)
a2 = Aluno("Maria Silva", 54, "Almada", 222)
a3 = Aluno("Pedro Costa", 13, "Porto", 333)
a4 = Aluno("Carlos Sousa", 66, "Lisboa", 444)
a5 = Aluno("João Carvalho", 34, "Gaia", 555)

print("=== Lista Original ===\n")

a1.toString()
a2.toString()
a3.toString()
a4.toString()
a5.toString()

# print("="*50)

# a1.completarAnos()

# a1.toString()

# print("="*50)

# a3.atribuirNota(14, 17)
# a3.toString()

# print("="*50)

# print()

# print(f"Média do aluno 3 é: {a3.getMedia()}")

print("\n\n")