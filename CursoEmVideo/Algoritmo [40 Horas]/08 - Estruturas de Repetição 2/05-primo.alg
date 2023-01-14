algoritmo "NumeroPrimo"
// =============================================================
// Algoritmo para verificar se um determinado numero e PRIMO ou nao.
//
// AUTOR: Gustavo Guanabara
// Curso COMPLETO disponivel GRATIS no site www.cursoemvideo.com
// =============================================================
var
   C, N, ContDiv: Inteiro
inicio
   C <- 1
   ContDiv <- 0
   Escreva("Digite um número: ")
   Leia(N)
   Repita
      Se (N % C = 0) entao
         ContDiv <- ContDiv + 1
      FimSe
      C <- C + 1
   Ate (C > N)
   Se (ContDiv > 2) entao
      EscrevaL ("O valor ", N, " não é primo!")
   senao
      EscrevaL ("O valor ", N, " é primo!")
   FimSe
fimalgoritmo
