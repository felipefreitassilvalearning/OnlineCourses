import sys


def computador_escolhe_jogada(n, m):
    print("Computador começa!")
    print("O computador tirou",m,"peças.")
    print("Agora restam",(n - m),"peças no tabuleiro.")
    return (n - m)

def usuario_escolhe_jogada(n, m):
    print("Você começa!")
    print("O computador tirou",m,"peças.")
    n = int(input("Quantas peças você vai tirar? "))
    return (n - m)

def partida():
    n = int(input("Quantas peças? "))
    m = int(input("Limite de peças por jogada? "))
    while n > 0:
        if n % (m + 1) == 0:
            usuario_escolhe_jogada(n, m)
        else:
            computador_escolhe_jogada(n, m)
    print("Fim do jogo! O computador ganhou!")

def campeonato():
    i = 0
    while i < 3:
        print("**** Rodada",i,"****")
        partida()
    print("Placar: Você 0 X 3 Computador")

def l():
    print()

def pc(j):
    p = "Você escolheu uma partida!"
    c = "Você escolheu um campeonato!"
    if j == 1:
        return(p)
    elif j == 2:
        return(c)
    else:
        print("1, ou 2 - não é difícil...")
        jogo()

def jogo():
    print("Bem-vindo ao jogo do NIM! Escolha: ")
    l()
    print("1 - para jogar uma partida isolada")
    print("2 - para jogar um campeonato")
    l()
    j = int(input())
    r = (pc(j))
    if r:
        partida()
    else:
        campeonato()

jogo()
