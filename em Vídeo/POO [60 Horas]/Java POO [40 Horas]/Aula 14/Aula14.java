public class Aula14 {
    public static void main(String[] args) {
        Video[] videos = new Video[3];
        videos[0] = new Video("Aula 1 de POO");
        videos[1] = new Video("Aula 12 de PHP");
        videos[2] = new Video("Aula 10 de HTML5");

        Gafanhoto[] gafanhotos = new Gafanhoto[2];
        gafanhotos[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
        gafanhotos[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

        for (Video video : videos) {
            hr();
            System.out.println(video);
        }

        for (Gafanhoto gafanhoto : gafanhotos) {
            hr();
            System.out.println(gafanhoto);
        }
    }

    private static void hr() {
        System.out.println("==========================");
    }
}
