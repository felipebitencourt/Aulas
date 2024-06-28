import math
import random

print("\n\n")

nome = "Felipe"
sobrenome = "Bitencourt"
idade = 27
morada = "Póvoa"

print("Sou o ", nome, " ", sobrenome, ", tenho ", idade, " anos e moro na ", morada, ". \n", sep = "")
print(f"Sou o {nome} {sobrenome}, tenho {idade} anos e moro na {morada}. \n")
print("Sou o {} {}, tenho {} anos e moro na {}. \n".format(nome, sobrenome, idade, morada))
print("Sou o {0} {1}, tenho {2} anos e moro na {3}. \n".format(nome, sobrenome, idade, morada))

print("\n\n")