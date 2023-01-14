package Exercicios;

import javax.swing.JOptionPane;

public class Tema {
    public static void main(String[] args) {
        int n, soma = 0, totalValores = 0, totalPares = 0, totalImpares = 0, acima100 = 0, media = 0;
        do {
            n = Integer.parseInt(
                    JOptionPane.showInputDialog(null, "<html>Informe um número: <br><em>(Ou 0 para sair)</em></html>"));
            soma += n;
            if (n == 0)
                continue;
            if (n % 2 == 0)
                totalPares++;
            else
                totalImpares++;
            if (n > 100)
                acima100++;
            totalValores++;
            media = (soma / totalValores);
        } while (n != 0);
        String message = "<html>"
                + "Resultado:<br>"
                + "<hr>"
                + "<br>Total de valores: "
                + totalValores
                + "<br>Total de Pares: "
                + totalPares
                + "<br>Total de Ímpares: "
                + totalImpares
                + "<br>Acima de 100: "
                + acima100
                + "<br>Média dos valores: "
                + media
                + "</html>";
        JOptionPane.showMessageDialog(null, message);
    }
}
