import math, sys

def C(n, k):
    if n - k < 0:
        sys.exit("Apenas valores positivos")
    fac = math.factorial
    nk = fac(n-k)
    n = fac(n)
    k = fac(k)
    res = n / (k * nk)
    print("O coeficiente binomial é:",res)
