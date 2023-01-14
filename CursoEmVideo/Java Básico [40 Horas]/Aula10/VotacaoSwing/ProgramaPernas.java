import java.util.Scanner;

public class ProgramaPernas {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.print("Quantidade de pernas: ");
        int qtdPernas = input.nextInt();
        String tipo;
        switch (qtdPernas) {
            case 1:
                tipo = "Saci";
                break;

            case 2:
                tipo = "Bípede";
                break;

            case 3:
                tipo = "Tripé";
                break;

            case 4:
                tipo = "Quadrúpede";
                break;

            case 6:
            case 8:
                tipo = "Aranha";
                break;

            default:
                tipo = "ET";
        }
        System.out.println(tipo);
    }
}
