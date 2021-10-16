algoritmo "ParImpar"
// =============================================================
// Algoritmo para criar uma funcao que verifica se um determinado
// numero passado como parametro e PAR ou IMPAR.
//
// AUTOR: Gustavo Guanabara
// Curso COMPLETO disponivel GRATIS no site www.cursoemvideo.com
// =============================================================
var
  N: Inteiro
  R: Caractere
Funcao ParOuImpar(V: Inteiro): Caractere
inicio
      Se (V%2 = 0) entao
         retorne "par"
      senao
           retorne "impar"
      fimse
FimFuncao
inicio
      Escreva ("Digite um número: ")
      Leia (N)
      R <- ParOuImpar(N)
      Escreva ("O número ",N," é um valor ",R)
fimalgoritmo
