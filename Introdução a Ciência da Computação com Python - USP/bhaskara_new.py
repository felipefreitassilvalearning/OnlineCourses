import math

def baskhara (a, b, c):
    d = b ** 2 - 4 * a * c
    if d > 0 :
        delta = math.sqrt(d)
        x1 = (-b - delta) / (2 * a)
        x2 = (-b + delta) / (2 * a)
        return("as raízes da equação são",x1,"e",x2)
    elif d == 0 :
        x = -b / 2*a
        return("a raiz desta equação é",x)
    else :
        return("esta equação não possui raízes reais")
