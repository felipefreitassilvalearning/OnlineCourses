public class Contador01 {

    public static void main(String[] args) {
        int cc = 0;
        while (cc < 4) {
            System.out.println("Cambalhota " + (cc + 1));
            cc++;
        }
        cc = 0;
        while (cc < 10) {
            cc++;
            if ((cc == 5) || (cc == 7))
                continue;
            System.out.println("Cambalhota " + cc);
        }
        cc = 0;
        while (cc < 10) {
            cc++;
            if ((cc == 2) || (cc == 3) || (cc == 4))
                continue;
            if (cc == 7)
                break;
            System.out.println("Cambalhota " + cc);
        }
    }
}