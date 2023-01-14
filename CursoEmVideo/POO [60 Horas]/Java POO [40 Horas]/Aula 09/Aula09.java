public class Aula09 {
    public static void main(String[] args) {
        Pessoa09[] p = new Pessoa09[2];
        Livro[] l = new Livro[3];

        p[0] = new Pessoa09("Pedro", 22, "M");
        p[1] = new Pessoa09("Maria", 25, "F");

        l[0] = new Livro("Aprendendo Java", "José da Silva", 300, p[0]);
        l[1] = new Livro("POO para Iniciantes", "Pedro Paulo", 500, p[1]);
        l[2] = new Livro("Java Avançado", "Maria Candido", 800, p[0]);

        l[0].abrir();
        l[0].folhear(200);
        l[0].avancarPag();
        System.out.println(l[0]);
        System.out.println(l[1]);
    }
}
