public class Cachorro extends Mamifero {
    public void enterrarOsso() {
        System.out.println("Enterrando Osso");
    }

    public void abanarRabo() {
        System.out.println("Abanando o Rabo");
    }

    @Override
    public void emitirSom() {
        System.out.println("Au! Au! Au!");
    }
}
