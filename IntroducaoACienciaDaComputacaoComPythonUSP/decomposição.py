
n = int(input("Digite um número inteiro > 1: "))

fator = 2
multiplicidade = 0
while n > 1:
    while n % fator == 0:
        multiplicidade += 1
        n = n / fator
    if multiplicidade > 0:
        print("A multiplicidade do fator", fator, "é", multiplicidade)
    fator += 1
    multiplicidade = 0
