from funcoes import *      #neste caso, as funções

limpa()

print("{:=^20}".format("INÍCIO"), "\n")

horaInicio = int(input("→ Que horas começou o jogo?: "))
horaFinal = int(input("→ Que horas terminou o jogo?: "))

def horas(horaInicio, horaFinal):
    resultado = horaFinal - horaInicio
    if(horaFinal < horaInicio):
        resultado1 = 24 + resultado
        print(f"\n→ O jogo durou: {resultado1} horas.")
    else:
        print(f"\n→ O jogo durou: {resultado} horas.")

horas(horaInicio, horaFinal)

print("\n", "{:=^20}".format("FIM"))

print("\n\n")