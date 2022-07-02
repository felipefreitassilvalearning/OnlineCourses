package br.com.dio.calculadora;

import java.util.Scanner;

public class Calculadora {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        System.out.print("Digite a: ");
        int a = input.nextInt();

        System.out.print("Digite b: ");
        int b = input.nextInt();

        System.out.println("Soma: "+soma(a, b));
        System.out.println("Subtração: "+subtracao(a, b));
        System.out.println("Multiplicação: "+multiplicacao(a, b));
        System.out.println("Divisão: "+divisao(a, b));
    }

    public static int soma(int a, int b) {
        return a + b;
    }

    public static int subtracao(int a, int b) {
        return a - b;
    }

    public static int multiplicacao(int a, int b) {
        return a * b;
    }

    public static int divisao(int a, int b) {
        return a / b;
    }

}
