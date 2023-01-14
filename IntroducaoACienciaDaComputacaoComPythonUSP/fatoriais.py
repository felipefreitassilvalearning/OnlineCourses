
def fatorial(n):
    fat = 1
    while (n > 1):
        fat = fat * n
        n = n - 1
    return(fat)

n = 0
while not(n < 0):
    n = int(input("Digite um número: "))
    print(fatorial(n))
