package testefuncao02;

public class Operacoes {
    public static String contador(int c, int f) {
        String s = "";

        for (int i = c; i < f; i++) {
            s += i + " ";
        }

        return s;
    }
}
