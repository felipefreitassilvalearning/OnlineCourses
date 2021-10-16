import sys

def quantos_primos(n):
    qtdPrimos = 0
    if n < 2:
        sys.exit("Apenas valores positivos")
    else:
        qtdPrimos = 0
        while n > 1:
            d = 0
            for c in range(1, n + 1):
                if n % c == 0:
                    d = d + 1
            if d == 2 and n > 1:
                qtdPrimos += 1
                n -= 1
            else:
                n -= 1
        return(qtdPrimos)


def quais_primos(n):
    def ePrimo(x):
        fator = 2
        if x == 2:
            return True

    while x % fator != 0 and fator <= x/2:
        fator += 1
    if x % fator == 0:
        return False
    else:
        return True

    n = 2
    while n < q:
        if éPrimo(n):
            print(n, end=", ")
        n += 1



def ePrimo(n):
    m = 0
    for c in range(1, n + 1):
        if n % c == 0:
            m = m + 1
    if m == 2:
        return (n)
    else:
        return(ePrimo(n - 1))



def maior_primo(n):
    if n < 2:
        sys.exit("Apenas valores positivos")
    else:
        return(ePrimo(n))
