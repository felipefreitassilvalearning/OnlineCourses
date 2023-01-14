import java.util.Random;

public class Aula15 {
    public static void main(String[] args) {
        Video[] videos = new Video[3];
        videos[0] = new Video("Aula 1 de POO");
        videos[1] = new Video("Aula 12 de PHP");
        videos[2] = new Video("Aula 10 de HTML5");

        Gafanhoto[] gafanhotos = new Gafanhoto[2];
        gafanhotos[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
        gafanhotos[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

        Visualizacao[] visualizacoes = new Visualizacao[5];
        for (int i = 0; i < visualizacoes.length; i++) {
            visualizacoes[i] = new Visualizacao(gafanhotos[getRandom(2)], videos[getRandom(3)]);
        }

        visualizacoes[getRandom(5)].avaliar();
        visualizacoes[getRandom(5)].avaliar(87.0f);
        visualizacoes[getRandom(5)].avaliar(87);

        hr();
        System.out.println("Visualizações");
        for (Visualizacao visualizacao : visualizacoes) {
            hr();
            System.out.println(visualizacao);
        }
    }

    private static void hr() {
        System.out.println("==========================");
    }

    private static int getRandom(int bound) {
        return new Random().nextInt(bound);
    }
}
