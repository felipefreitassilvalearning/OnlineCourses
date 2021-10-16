algoritmo "SomaParametrosReferencia"
// =============================================================
// Algoritmo para somar dois valores usando procedimentos com
// passagem de parametros por referencia.
//
// AUTOR: Gustavo Guanabara
// Curso COMPLETO disponivel GRATIS no site www.cursoemvideo.com
// =============================================================
var
   X, Y: Inteiro
Procedimento Soma(var A, B: Inteiro)
inicio
      A <- A + 1
      B <- B + 2
      Escreval ("Valor de A = ",A)
      Escreval ("Valor de B = ",B)
      Escreval ("Soma A + B = ",A + B)
FimProcedimento
inicio
      X <- 4
      Y <- 8
      Soma (X, Y)
      Escreval ("Valor de X = ",X)
      Escreval ("Valor de Y = ",Y)
fimalgoritmo
