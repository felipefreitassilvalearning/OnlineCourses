/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Project/Maven2/JavaApp/src/main/java/${packagePath}/${mainClassName}.java to edit this template
 */

package com.cursoemvideo.javabasico.ffs.tiposprimitivos;

import java.util.Scanner;

/**
 *
 * @author Felipe
 */
public class TiposPrimitivos {

    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        System.out.print("Digite o nome do aluno: ");
        String nome = teclado.nextLine();
        System.out.print("Digite a nota do aluno: ");
        float nota = teclado.nextFloat();
        System.out.println("A nota de "+nome+" é: "+nota);
        System.out.printf("A nota de %s é: %.2f %n", nome, nota);
        System.out.format("A nota de %s é: %.4f", nome, nota);
    }
}
