import sys


def n_primos(n):
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
