public class Pessoa09 {
    private String nome;
    private int idade;
    private String sexo;

    public Pessoa09(String nome, int idade, String sexo) {
        this.nome = nome;
        this.idade = idade;
        this.sexo = sexo;
    }

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
                + "\tNome: " + this.getNome()
                + "\n\tIdade: " + this.getIdade()
                + "\n\tSexo: " + this.getSexo());
    }

    public void fazerAniver() {
        this.setIdade(this.getIdade() + 1);
    }
}
