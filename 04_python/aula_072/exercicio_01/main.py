from funcoes import *

limpa()

array = ["uva", "maçã", "morango"]
print(f"→ Lista original: {array}\n")

array.append("ananás")
print(f"→ Lista modificada: {array}\n")

array.insert(1, "laranja")
print(f"→ Lista modificada: {array}\n")

array.pop(0)
print(f"→ Lista modificada: {array}\n")

array.remove("morango")
print(f"→ Lista final: {array}\n")
    
print("\n\n")