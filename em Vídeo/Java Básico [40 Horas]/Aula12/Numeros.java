import java.util.Scanner;

public class Numeros {
    public static void main(String[] args) {
        int n, s = 0;
        String resp;
        Scanner input = new Scanner(System.in);
        do {
            System.out.print("Digite um número: ");
            n = input.nextInt();
            s += n;
            System.out.print("Deseja continuar? [S/N]");
            resp = input.next();
        } while ("S".equalsIgnoreCase(resp));
        System.out.println("A soma de todos os valores é: " + s);
    }
}
