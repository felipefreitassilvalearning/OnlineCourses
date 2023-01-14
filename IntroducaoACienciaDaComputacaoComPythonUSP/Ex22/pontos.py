import math

x1 = int(input("Digite a coordenada x do 1º ponto: "))
y1 = int(input("Digite a coordenada y do 1º ponto: "))
x2 = int(input("Digite a coordenada x do 2º ponto: "))
y2 = int(input("Digite a coordenada y do 2º ponto: "))

d1 = (x1 - x2) ** 2
d2 = (y1 - y2) ** 2
d = math.sqrt((d1 + d2))

if d >= 10 :
    print("longe")
else :
    print("perto")
