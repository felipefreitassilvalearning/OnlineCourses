/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Project/Maven2/JavaApp/src/main/java/${packagePath}/${mainClassName}.java to edit this template
 */

/**
 *
 * @author Felipe
 */
public class OperadorTernario {

    public static void main(String[] args) {
        int n1, n2, r;
        n1 = 4;
        n2 = 8;
        r = (n1 > n2) ? 0 : 1;
        System.out.println(r);

        n1 = 14;
        n2 = 8;
        r = (n1 > n2) ? n1 + n2 : n1 - n2;
        System.out.println(r);
    }
}
