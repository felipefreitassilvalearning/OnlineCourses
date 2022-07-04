import java.util.Scanner;

public class ProgramaIdade {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.print("Ano de nascimento: ");
        int nasc = input.nextInt();
        int i = 2022 - nasc;
        System.out.println("Sua idade é: " + i);
        if (i >= 18) {
            System.out.println("Maior de idade");
        } else {
            System.out.println("Menor de idade");
        }
    }
}
