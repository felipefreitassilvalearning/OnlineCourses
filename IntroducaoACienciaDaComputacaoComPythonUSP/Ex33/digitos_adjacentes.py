import sys

n = int(input("Digite um número inteiro: "))
n1 = n
r1 = n % 10

if n < 0:
    sys.exit("por favor, digite apenas números positivos")

while n // 10 != 0 :
    n = n // 10
    r = n % 10
    if r == r1 :
        print("sim")
        n = n1
        break
    r1 = r

if n // 10 == 0 :
    print("não")
