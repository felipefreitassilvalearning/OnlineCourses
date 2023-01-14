public class RepeticaoFor {
    public static void main(String[] args) {
        System.out.println("Laço 1");
        for (int cc = 0; cc < 4; cc++) {
            System.out.println("Cambalhota");
        }

        System.out.println("Laço 2");
        for (int cc = 5; cc < 15; cc += 2) {
            System.out.println(cc);
        }

        System.out.println("Laço 3");
        for (int cc = 15; cc > 5; cc -= 2) {
            System.out.println(cc);
        }

        System.out.println("Laço 4");
        for (int cc = 1; cc < 100; cc += 10) {
            System.out.println(cc);
        }

        /*
         * int cc = 0;
         * while (cc < 4) {
         * System.out.println("Cambalhota");
         * c++;
         * }
         */
    }
}
