public class Aula03 {
    public static void main(String[] args) {
        Caneta03 c1 = new Caneta03();
        c1.modelo = "BIC cristal";
        c1.cor = "Azul";
        // c1.ponta = 0.5;
        c1.carga = 80;
        // c1.tampada = true;
        c1.tampar();
        c1.status();
        c1.rabiscar();
    }
}
