public class OperadoresAritmeticos {
    public static void main(String[] args) {
        int n1 = 3;
        int n2 = 5;
        float m = (n1 + n2) / 2;
        System.out.println("A média é igual a: " + m);

        int numero = 10;
        int valor = 4 + --numero;
        System.out.println(valor);
        System.out.println(numero);

        int x = 4;
        x += 2; // x = x + 2
        x *= 2;
        System.out.println(x);

        System.out.println(Math.PI);
        System.out.println(Math.pow(2, 12));
        System.out.println(Math.sqrt(256));
        System.out.println(Math.cbrt(4096));

        System.out.println(Math.abs(-10));
        System.out.println(Math.floor(3.9));
        System.out.println(Math.ceil(4.2));
        System.out.println(Math.round(4.499999999999999));
        System.out.println(Math.round(4.4999999999999999));

        // Get a random number
        System.out.println(Math.random());

        // Get a random number between a and b
        int a = 1;
        int b = 100;
        System.out.println(a + Math.random() * (b - a));
    }
}
