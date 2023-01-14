algoritmo "AnalisadorStrings"
// =============================================================
// Algoritmo para demonstrar as principais funcoes de manipulacao
// de strings do visualg.
//
// AUTOR: Gustavo Guanabara
// Curso COMPLETO disponivel GRATIS no site www.cursoemvideo.com
// =============================================================
var
  N: Caractere
  C: Inteiro
inicio
   Escreva("Digite seu nome: ")
   Leia(N)
   EscrevaL("Total de letras do seu nome: ", Compr(N))
   EscrevaL("Seu nome em maiúsculas: ", Maiusc(N))
   EscrevaL("Seu nome em minúsculas: ", Minusc(N))
   EscrevaL("A primeira letra do seu nome é ", Copia(N, 1, 1))
   EscrevaL("A última letra do seu nome é ", Copia(Maiusc(N), Compr(N), 1))
   Se Pos ("A", N) = 0 entao
         Escreval ("Seu nome não possui a letra 'A'")
     senao
     EscrevaL("Seu nome tem a letra A na posicao ", Pos("A", Maiusc(N)))
   FimSe
   EscrevaL("O código da letra A é ", Asc("A"))
   EscrevaL("A letra de codigo 65 é ", Carac(65))

   Para C <- Compr(N) ate 1 passo -1 faca
        Escreva(Copia(Maiusc(N), C, 1))
   FimPara
fimalgoritmo
