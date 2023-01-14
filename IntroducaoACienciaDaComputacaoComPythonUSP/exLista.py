
lis = []

n = int(input("Digite um número: "))
lis.append(n)

while n != 0:
    n = int(input("Digite um número: "))
    lis.append(n)
    
lis.reverse()
print(lis)
