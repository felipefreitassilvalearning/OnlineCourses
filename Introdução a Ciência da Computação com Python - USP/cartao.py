
meuCartao = int(input("Digite o número do seu cartão de crédito: "))

cartãoLido = 1
encontreiMeuCartaoNaLista = False

while cartãoLido != 0 and not encontreiMeuCartaoNaLista:
    cartãoLido = int(input("Digite o número do próximo cartão de crédito: "))
    if cartãoLido == meuCartao:
        encontreiMeuCartaoNaLista = True

if encontreiMeuCartaoNaLista:
    print("EBA!!! Meu cartão está lá!")
else:
    print("Xi, meu cartão não está lá!")
