public class Aula05 {
    public static void main(String[] args) {
        ContaBanco p1 = new ContaBanco();
        p1.setNumConta(1111);
        p1.setDono("Jubileu");
        p1.abrirConta("Cc");

        ContaBanco p2 = new ContaBanco();
        p2.setNumConta(2222);
        p2.setDono("Creuza");
        p2.abrirConta("Cp");

        p1.depositar(100);
        p2.depositar(500);
        p2.sacar(1000);

        p1.fecharConta();

        System.out.println(p1);
        System.out.println(p2);
    }
}
