
lista1 = ["vermelho","verde","azul"]

def parte1():
    def l():
        print()

    print(lista1)
    l()
    
    lista2 = lista1
    print(lista2)
    l()
    
    print(lista1)
    l()
    
    lista2[0] = "rosa"
    print(lista1)
    l()
    
    print(lista2)


def clone(lista):
    clone = []
    for objeto in lista:
        clone.append(objeto)
    return clone

lista2 = clone(lista1)


#fatiamento:
lista1[ini:fim]
lista1[ini:]
lista1[:fim]
lista1[:] #Devolve um clone da lista


lista2 = lista1[:]
print(lista1, lista2)
l()


