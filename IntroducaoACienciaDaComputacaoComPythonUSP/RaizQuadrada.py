import math

a = float(input("Digite o valor de 'a': "))
b = float(input("Digite o valor de 'b': "))
c = float(input("Digite o valor de 'c': "))

d = b ** 2 - 4 * a * c

if d > 0 :
    delta = math.sqrt(d)
    x1 = (-b + delta) / (2 * a)
    x2 = (-b - delta) / (2 * a)
    print("A equação possui duas raízes reais,",x1,"e",x2)
elif d == 0 :
    x = -b / 2*a
    print("A equação só possui uma raíz:",x)
else :
    print("A equação não possui raízes reais")
