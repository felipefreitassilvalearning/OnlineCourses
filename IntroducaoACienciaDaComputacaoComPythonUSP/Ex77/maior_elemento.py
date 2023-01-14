
lista = [2, 4, 2, 2, 3, 3, 1]

def maior_elemento(lista):
    lista.sort()
    i = 0
    if len(lista) == 1:
        return(lista[0])
    else:
        while i < len(lista) - 1:
            if lista[i] <= lista[i+1]:
                maior = lista[i+1]
            i += 1
        return(maior)
