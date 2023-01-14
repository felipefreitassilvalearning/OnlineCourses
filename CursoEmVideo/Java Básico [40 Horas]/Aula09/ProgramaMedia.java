import java.util.Scanner;

public class ProgramaMedia {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.print("Primeira nota: ");
        float n1 = input.nextFloat();
        System.out.print("Segunda nota: ");
        float n2 = input.nextFloat();
        float m = (n1 + n2) / 2;
        System.out.println("Sua média foi: " + m);
        if (m > 9) {
            System.out.println("Parabéns, pequeno gafanhoto!");
        }
    }
}
