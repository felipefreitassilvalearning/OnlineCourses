public class Aula10 {
    public static void main(String[] args) {
        Pessoa10 p1 = new Pessoa10();
        Aluno10 p2 = new Aluno10();
        Professor10 p3 = new Professor10();
        Funcionario p4 = new Funcionario();

        p1.setNome("Pedro");
        p2.setNome("Maria");
        p3.setNome("Cláudio");
        p4.setNome("Fabiana");

        p1.setSexo("M");
        p4.setSexo("F");
        p2.setIdade(18);

        p2.setCurso("Informática");
        p3.setSalario(2500.75f);
        p4.setSetor("Estoque");

        // p1.receberAum(550.20f);
        // p2.mudarTrabalho();
        // p4.cancelarMatr();

        System.out.println(p1);
        System.out.println("--------------------------");
        System.out.println(p2);
        System.out.println("--------------------------");
        System.out.println(p3);
        System.out.println("--------------------------");
        System.out.println(p4);
    }
}
