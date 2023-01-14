import sys


def computador_escolhe_jogada(n, m):
    jogada_computador = 1

    while jogada_computador != m:
        if (n - jogada_computador) % (m+1) == 0:
            return jogada_computador
        else:
            jogada_computador += 1
    return jogada_computador



def usuario_escolhe_jogada(n, m):
    valida = False

    while not valida:
        l()
        jogada_usuario = int(input('Quantas peças você vai tirar? '))
        if jogada_usuario > m or jogada_usuario < 1:
            l()
            print('Oops! Jogada inválida! Tente de novo.')
        else:
            valida = True
    return jogada_usuario



def partida():
    l()
    n = int(input("Quantas peças? "))
    m = int(input("Limite de peças por jogada? "))
    computador_joga = False
    if n % (m + 1) == 0:
        l()
        print("Você começa!")
    else:
        l()
        print("Computador começa!")
        computador_joga = True

    while n > 0:

        if computador_joga:
            jogada_computador = computador_escolhe_jogada(n, m)
            n = n - jogada_computador

            if jogada_computador == 1:
                l()
                print("O computador tirou uma peça")
            else:
                l()
                print("O computador tirou",jogada_computador,"peças")
            computador_joga = False

        else:
            jogada_usuario = usuario_escolhe_jogada(n, m)
            n = n - jogada_usuario

            if jogada_usuario == 1:
                l()
                print("Você tirou 1 peça")
            else:
                l()
                print("Você tirou",jogada_usuario,"peças")
            computador_joga = True

        if n == 1:
            l()
            print("Agora resta apenas 1 peça no tabuleiro.")
        else:
            if n != 0:
                l()
                print("Agora restam",n,"peças no tabuleiro.")
    l()
    print("Fim do jogo! O computador ganhou!")



def campeonato():
    i = 0
    while i < 3:
        i = i + 1
        l()
        print("**** Rodada",i,"****")
        partida()
    l()
    print("**** Final do campeonato! ****")
    l()
    print("Placar: Você 0 X 3 Computador")



def l():
    print()



def pc(j):
    if j == 1:
        l()
        print("Você escolheu uma partida!")
        partida()
    elif j == 2:
        l()
        print("Você escolheu um campeonato!")
        campeonato()
    else:
        l()
        print("1, ou 2 - não é difícil...")
        jogo()



def jogo():
    l()
    l()
    print("Bem-vindo ao jogo do NIM! Escolha: ")
    l()
    print("1 - para jogar uma partida isolada")
    print("2 - para jogar um campeonato ")
    l()
    j = int(input())
    pc(j)

jogo()
