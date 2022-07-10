class Aula12 {
    public static void main(String[] args) {
        // Animal n = new Animal();
        Mamifero mamifero = new Mamifero();
        Reptil reptil = new Reptil();
        Peixe peixe = new Peixe();
        Ave ave = new Ave();
        Canguru canguru = new Canguru();
        Cachorro cachorro = new Cachorro();
        Cobra cobra = new Cobra();
        Tartaruga tartaruga = new Tartaruga();
        GoldFish goldFish = new GoldFish();
        Arara arara = new Arara();

        System.out.println("----- mamifero -----");
        mamifero.setPeso(35.3f);
        mamifero.setCorPelo("Marrom");
        mamifero.locomover();
        mamifero.alimentar();
        mamifero.emitirSom();

        System.out.println("----- ave -----");
        ave.setPeso(0.89f);
        ave.setIdade(2);
        ave.setMembros(2);
        ave.locomover();
        ave.alimentar();
        ave.emitirSom();

        System.out.println("----- peixe -----");
        peixe.locomover();
        peixe.alimentar();
        peixe.emitirSom();

        System.out.println("----- reptil -----");
        reptil.locomover();
        reptil.alimentar();
        reptil.emitirSom();

        System.out.println("----- canguru -----");
        canguru.setPeso(55.3f);
        canguru.setIdade(3);
        canguru.setMembros(4);
        canguru.locomover();
        canguru.alimentar();
        canguru.emitirSom();

        System.out.println("----- cachorro -----");
        cachorro.setPeso(3.94f);
        cachorro.setIdade(5);
        cachorro.setMembros(4);
        cachorro.locomover();
        cachorro.alimentar();
        cachorro.emitirSom();
    }
}