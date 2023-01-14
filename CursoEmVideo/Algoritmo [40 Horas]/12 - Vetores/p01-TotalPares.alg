algoritmo "TotalPares"
// =============================================================
// Algoritmo para preencher um vetor e mostrar os que sao pares.
//
// AUTOR: Gustavo Guanabara
// Curso COMPLETO disponivel GRATIS no site www.cursoemvideo.com
// =============================================================
var
   val: vetor[1..7] de Inteiro
   i, TotPar: Inteiro
inicio
      Para i <- 1 ate 7 faca
           Escreva ("Digite o ",i,"º valor: ")
           Leia(val[i])
      FimPara
      Para i <- 1 ate 7 faca
           Se (val[i] % 2 = 0) entao
              TotPar <- TotPar + 1
              Escreval("Valor par na posição: ",i)
           FimSe
      FimPara
      Escreval("O total de pares foi: ",TotPar)
fimalgoritmo
