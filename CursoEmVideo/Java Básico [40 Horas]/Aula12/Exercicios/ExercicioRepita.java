package Exercicios;

import javax.swing.JOptionPane;

public class ExercicioRepita {
    public static void main(String[] args) {
        // JOptionPane.showMessageDialog(null, "Olá, Mundo!");
        // JOptionPane.showMessageDialog(null, "Olá, Mundo!", "Boas Vindas",
        // JOptionPane.INFORMATION_MESSAGE);
        // JOptionPane.showMessageDialog(null, "Olá, Mundo!", "Boas Vindas",
        // JOptionPane.ERROR_MESSAGE);
        // JOptionPane.showMessageDialog(null, "Olá, Mundo!", "Boas Vindas",
        // JOptionPane.WARNING_MESSAGE);
        int n, s = 0;
        // JOptionPane.showMessageDialog(null, "Você digitou o valor: " + n, "Valor
        // Digitado", JOptionPane.PLAIN_MESSAGE);
        do {
            n = Integer.parseInt(
                    JOptionPane.showInputDialog(null, "<html>Informe um número: <br><em>(Ou 0 para sair)</em></html>"));
            s += n;
        } while (n != 0);
        JOptionPane.showMessageDialog(null, "<html>Resultado final<br><hr>" + "<br>Somatório vale: " + s + "</html>");
    }
}
