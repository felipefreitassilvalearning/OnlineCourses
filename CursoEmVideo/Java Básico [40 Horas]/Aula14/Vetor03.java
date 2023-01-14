import java.util.Arrays;

public class Vetor03 {
    public static void main(String[] args) {
        double[] v = { 3.5, 2.75, 9, -4.5 };
        for (double valor : v) {
            System.out.print(valor + " ");
        }

        System.out.println();
        Arrays.sort(v);
        for (double valor : v) {
            System.out.print(valor + " ");
        }
    }
}
