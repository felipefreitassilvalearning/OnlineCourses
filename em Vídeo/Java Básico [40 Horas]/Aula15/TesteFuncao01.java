public class TesteFuncao01 {

    // static void soma(int a, int b) {
    // int s = a + b;
    // System.out.println("A soma é: " + s);
    // }

    static int soma(int a, int b) {
        return a + b;
    }

    public static void main(String[] args) {
        System.out.println("Começou o programa.");
        int soma = soma(5, 2);
        System.out.println("A soma vale: " + soma);
    }
}
