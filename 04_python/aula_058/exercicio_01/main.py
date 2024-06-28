print("\n\n")

nome = "Codemaster"

print("=== Métodos e Funções das Strings ===\n")

print("String 'original': (" + nome + ")" + "\n")

print("String 'capitalize': (", nome.capitalize(), ")", sep = "")
print("String 'maiúsculo': (", nome.upper(), ")", sep = "")
print("String 'minúsculo': (" + nome.lower() + ")", sep = "" + "\n")

print("String 'total de letras (e)': (", nome.count("e"), ")", sep = "")                 #utilizei o str pq o len não é texto,
print("String 'tamanho total com função': (" + str(len(nome)) + ")", sep = "" + "\n")    #portanto, não funciona com ","

print("Substituir todo 'e' por 'X': (", nome.replace("e", "X"), ")", sep = "")

print("\n\n")