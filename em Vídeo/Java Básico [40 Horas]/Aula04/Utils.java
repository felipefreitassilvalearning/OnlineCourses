import java.util.Date;
import java.util.Locale;
import java.awt.Dimension;
import java.awt.Toolkit;

public class Utils {

    public static void main(String[] args) {
        Date data = new Date();
        Locale loc = Locale.getDefault();
        Dimension tela = Toolkit.getDefaultToolkit().getScreenSize();

        System.out.println(data);
        System.out.println(loc.getDisplayLanguage());
        System.out.println(tela.getWidth() + " x " + tela.getHeight());
    }
}