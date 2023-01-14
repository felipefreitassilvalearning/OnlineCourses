
lista1 = ["vermelho","verde","azul"]
lista2 = lista1[:]
lista2[0] = "rosa"

print(lista1)
print(lista2)

print([1, 2] + [3, 4])

print([4,3,4,5,2] + [2,4,2,4,5,6])

a = [1, 2, 3]
b = [4, 5, 6]

print(a + b)
print(b + a)
print(b + a + b)

a.append("gato")
print(a)

b = a + [5]
print(b)
