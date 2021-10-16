largura = int(input("digite a largura: "))
altura = int(input("digite a altura: "))

linha_atual = 1

while linha_atual <= altura:

    print("#", end = "")
    coluna_atual = 2

    while coluna_atual < largura: 
        if linha_atual == 1 or linha_atual == altura or coluna_atual == largura:
            print("#", end = "")
        else:
            print(end = " ")
        coluna_atual += 1
    print("#")
    linha_atual += 1
