
dec = True
anterior = int(input("Digite o primeiro número da sequência: "))

valor = 1

while valor != 0 and dec :
    valor = int(input("Digite o próximo da sequência: "))
    if valor > anterior:
        dec = False
    anterior = valor

if dec :
    print("A sequência está em ordem decrescente! :-) ")
else:
    print("A sequência não está em ordem decrescente! :-( ")
