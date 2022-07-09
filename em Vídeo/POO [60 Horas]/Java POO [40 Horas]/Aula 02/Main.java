public class Main {
    public static void main(String[] args) {
        Caneta02 c1 = new Caneta02();
        c1.cor = "Azul";
        // c1.ponta = 0.5f;
        c1.tampar();
        c1.status();
        c1.rabiscar();

        Caneta02 c2 = new Caneta02();
        c2.modelo = "Hostnet";
        c2.cor = "Preta";
        c2.destampar();
        c2.rabiscar();
    }
}
