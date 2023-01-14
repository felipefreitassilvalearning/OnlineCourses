
pp = int(input("Digite um número inteiro: "))

i = 2
primo = True

while primo and i < pp:
    primo = not ((pp % i) == 0)
    i = i + 1

if primo:
    print("primo")
else:
    print("não primo")
