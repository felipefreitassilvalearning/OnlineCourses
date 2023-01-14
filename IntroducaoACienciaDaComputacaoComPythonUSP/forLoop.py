
frutas_exoticas = ["jaboticaba", "cupuaçu", "graviola"]

for fruta in frutas_exoticas:
    print("Eu adoro " + fruta)


primos = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47]

print(len(primos))

for x in primos:
    print("O quadrado de",x,"é: ",x ** 2)


print(range(20))


#for i in range(fim): #de i (0) ate valor (fim)
#for i in range(ini, fim): #de i (ini) até valor (fim)
#for i in range(ini, fim, passo): #de i (ini) até valor (fim) de (passo) em (passo)


for i in range(20):
    print(i, end=', ')
print()

for i in range(2, 19):
    print(i, end=', ')
print()

for i in range(2, 19, 2):
    print(i, end=', ')
print()


pares = range(0, 40, 2)
for i in pares:
    print(i, end=', ')


for x in range(100, 0, -5):
    print(x, end=', ')


print(primos)
for i in range(len(primos)):
    primos[i] = primos[i]**3


print(primos)
