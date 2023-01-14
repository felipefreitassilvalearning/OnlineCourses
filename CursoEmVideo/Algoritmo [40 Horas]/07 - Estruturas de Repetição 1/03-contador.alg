algoritmo "conteAte10"
var
   valor, salto, contador : Inteiro
inicio
    contador <- 0
    Escreva("Quer contar até quanto? ")
    Leia(valor)
    Escreva("Qual será o valor do salto? ")
    Leia(salto)
    Enquanto (contador <= valor) faca
        EscrevaL(contador)
        contador <- contador + salto
    FimEnquanto
    Escreval("Terminei de contar")
fimalgoritmo
