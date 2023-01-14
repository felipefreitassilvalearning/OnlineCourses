
lista = [2, 4, 2, 2, 3, 3, 1]

def remove_repetidos(lista):
    lista.sort()
    i = 0
    while i < len(lista) - 1:
        if lista[i] == lista[i+1]:
            del lista[i]
        else:
            i += 1
    return(lista)
