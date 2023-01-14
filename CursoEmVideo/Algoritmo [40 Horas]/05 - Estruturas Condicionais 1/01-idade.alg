algoritmo "CalculoIdade"
// =============================================================
// Algoritmo para verificar se uma pessoa ja atingiu a maioridade
//
// AUTOR: Gustavo Guanabara
// Curso COMPLETO disponivel GRATIS no site www.cursoemvideo.com
// =============================================================
var
  ano, nasc, idade: Inteiro
inicio
      Escreva("Em que ano estamos? ")
      Leia(ano)
      Escreva("Em que ano você nasceu? ")
      Leia(nasc)
      idade <- ano - nasc
      Escreva ("Em ", ano, " você terá ", idade, " anos")
      Se (idade >= 18) entao
         EscrevaL (" e já terá atingido a maioridade. ")
      FimSe
fimalgoritmo
