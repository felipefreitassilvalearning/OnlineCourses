algoritmo "CalculoIMC"
// =============================================================
// Algoritmo para calcular o Indice de Massa Corporal de uma pessoa
//
// AUTOR: Gustavo Guanabara
// Curso COMPLETO disponivel GRATIS no site www.cursoemvideo.com
// =============================================================
var
   M, A, IMC: Real
inicio
      Escreva("Massa (Kg): ")
      Leia(M)
      Escreva("Altura (m): ")
      Leia(A)
      IMC <- M / (A ^ 2)
      EscrevaL("IMC: ", IMC:5:2)
      Se (IMC >= 18.5) e (IMC < 25) entao
         Escreva("Parabéns! Você está no seu peso ideal")
      senao
         Escreva("Você não está na faixa de peso ideal")
      FimSe
fimalgoritmo
