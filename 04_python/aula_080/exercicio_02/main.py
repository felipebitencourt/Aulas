from funcoes import *
from Aluno import *

limpa()

alunos = []

alunos.append(Aluno("Fabrício Vidal", 28, "Covilhã", 111))
alunos.append(Aluno("Maria Silva", 16, "Lisboa", 222))
alunos.append(Aluno("Pedro Costa", 53, "ALmada", 333))
alunos.append(Aluno("Carlos Sousa", 66, "Gaia", 444))
alunos.append(Aluno("João Carvalho", 34, "Porto", 555))

print("=== Lista Original ===\n")
for a in alunos: a.toString()

print()
print("="*100)
print()

alunos[0].completarAnos()
alunos[2].completarAnos()
alunos[4].completarAnos()

print()

alunos[1].mudarMorada("Braga")
alunos[3].mudarMorada("Nazaré")

print()
print("="*100)
print()

print("=== Lista Final ===\n")
for a in alunos: a.toString()

print("\n\n")