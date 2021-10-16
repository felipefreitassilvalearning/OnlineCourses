algoritmo "DetectorPesado"
// =============================================================
// Algoritmo para detectar qual e a pessoa mais pesada, utilizando
// rotinas em algoritmos.
//
// AUTOR: Gustavo Guanabara
// Curso COMPLETO disponivel GRATIS no site www.cursoemvideo.com
// =============================================================
var
  I: Inteiro
  N, Pesado: Caractere
  P, Mai: Real
Procedimento Topo()
inicio
      LimpaTela
      EscrevaL("-------------------------------------------------")
      EscrevaL(" D E T E C T O R   DE   P E S A D O ")
      EscrevaL(" Maior peso até agora: ",MAI, "Kg")
      EscrevaL("-------------------------------------------------")
FimProcedimento
inicio
      Topo()
      Para I <- 1 ate 5 faca
           Escreva ("Digite o Nome: ")
           Leia (N)
           Escreva ("Digite o peso de ",N,": ")
           Leia (P)
           Se (P > Mai) entao
               Mai <- P
               Pesado <- N
           FimSe
         Topo()
      FimPara
      Topo()
      Escreval ("A pessoa mais pesada foi ",Pesado,", com ",Mai,"Kg")
fimalgoritmo
