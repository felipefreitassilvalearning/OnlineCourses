import sys


def ePrimo(n):
    m = 0
    for c in range(1, n + 1):
        if n % c == 0:
            m = m + 1
    if m == 2:
        return (n)
    else:
        return(ePrimo(n - 1))



def maior_primo(n):
    if n < 2:
        sys.exit("Apenas valores positivos")
    else:
        return(ePrimo(n))


def test_primalidade2():
	assert maior_primo(2) == 2

def test_primalidade3():
	assert maior_primo(3) == 3

def test_primalidade4():
	assert maior_primo(4) == 3

def test_primalidade5():
	assert maior_primo(5) == 5

def test_primalidade6():
	assert maior_primo(6) == 5

def test_primalidade7():
	assert maior_primo(7) == 7

def test_primalidade8():
	assert maior_primo(8) == 7

def test_primalidade9():
	assert maior_primo(9) == 7

def test_primalidade10():
	assert maior_primo(10) == 7

def test_primalidade11():
	assert maior_primo(11) == 11

def test_primalidade12():
	assert maior_primo(12) == 11

def test_primalidade100():
        assert maior_primo(100) == 97
