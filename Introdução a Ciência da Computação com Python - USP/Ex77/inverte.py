
n = int(input("Digite um número: "))
lista = [n]

while n != 0:
    n = int(input("Digite um número: "))
    lista.append(n)

print()
lista.reverse()
for i in lista:
    if i != 0:
        print(i)
