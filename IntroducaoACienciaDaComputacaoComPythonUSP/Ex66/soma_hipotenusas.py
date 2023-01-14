import sys


def é_hipotenusa(a, b):
    c2 = a**2 + b**2
    return c2


def soma_hipotenusas(n):
    c = 1
    soma = 0
    while (c <= n):       
        a = 1
        b = 1
        while (a < n):
            while (b < n):
                if (c ** 2 == é_hipotenusa(a, b)):
                    soma = soma + c
                    a = n
                    break
                b = b + 1
            a = a + 1
            b = a
        c = c + 1   
    return soma


n = int(input("Digite um número inteiro e positivo: "))
if n < 1:
    sys.exit("Apenas números inteiros e positivos...")
print(soma_hipotenusas(n))
