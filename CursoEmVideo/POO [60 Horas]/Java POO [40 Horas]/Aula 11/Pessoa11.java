public abstract class Pessoa11 {
    protected String nome;
    protected int idade;
    protected String sexo;

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public int getIdade() {
        return idade;
    }

    public void setIdade(int idade) {
        this.idade = idade;
    }

    public String getSexo() {
        return sexo;
    }

    public void setSexo(String sexo) {
        this.sexo = sexo;
    }

    public String toString() {
        return (""
                + "Nome: " + this.getNome()
                + "\nIdade: " + this.getIdade()
                + "\nSexo: " + this.getSexo());
    }

    public final void fazerAniv() {
        this.setIdade(this.getIdade() + 1);
    }

}
