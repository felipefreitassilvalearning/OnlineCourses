public class Main {
    public static void main(String[] args) {
        ControleRemoto cr = new ControleRemoto();
        cr.ligar();
        // cr.ligarMudo();
        cr.play();
        cr.maisVolume();
        cr.abrirMenu();
        cr.fecharMenu();
    }
}
