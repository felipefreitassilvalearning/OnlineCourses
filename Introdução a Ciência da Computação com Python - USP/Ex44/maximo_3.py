
def maximo(x, y, z):
    maior = x
    if (x > y and x > z) or ((x > y or x > z) and (x == y or x == z)):
        maior = x
    elif y > x and y > z or ((y > x or y > z) and (y == x or y == z)):
        maior = y
    elif z > x and z > y or ((z > x or z > y) and (z == x or z == y)):
        maior = z
    return (maior)
