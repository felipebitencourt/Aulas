from funcoes import *

limpa()

pessoa = {
  "nome": "Fabrício",
  "idade": 28,
  "morada": "Covilhã"
}

print(f"Dicionário Original: {pessoa}\n")

print("=== Dicionário com FOR ===\n")
for chave in pessoa:
  print(f"{chave}: {pessoa[chave]}")

print("\n=== Dicionário apenas as chaves ===\n")
print(pessoa.keys())

print("\n=== Dicionário apenas os valores ===\n")
print(pessoa.values())

print("\n\n")