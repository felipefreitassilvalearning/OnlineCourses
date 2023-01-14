
lista1 = ["vermelho","verde","azul"]
lista2 = lista1[:]
lista2[0] = "rosa"

print(lista1)
print(lista2)


print("rosa" in lista1)
print("rosa" in lista2)


if "vermelho" in lista1:
    print("está")
else:
    print("faltou")
