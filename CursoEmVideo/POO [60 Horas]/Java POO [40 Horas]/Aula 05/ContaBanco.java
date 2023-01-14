public class ContaBanco {
    public int numConta;
    protected String tipo; // Cc|Cp
    private String dono;
    private float saldo;
    private boolean status; // Aberta|Fechada

    public ContaBanco() {
        this.setSaldo(0);
        this.setStatus(false);
    }

    public int getNumConta() {
        return numConta;
    }

    public void setNumConta(int numConta) {
        this.numConta = numConta;
    }

    public String getTipo() {
        return tipo;
    }

    public void setTipo(String tipo) {
        this.tipo = tipo;
    }

    public String getDono() {
        return dono;
    }

    public void setDono(String dono) {
        this.dono = dono;
    }

    public float getSaldo() {
        return saldo;
    }

    public void setSaldo(float saldo) {
        this.saldo = saldo;
    }

    public boolean isStatus() {
        return status;
    }

    public void setStatus(boolean status) {
        this.status = status;
    }

    public void abrirConta(String tipo) {
        this.setTipo(tipo);
        this.setStatus(true);
        if ("Cc".equalsIgnoreCase(tipo))
            this.setSaldo(50);
        else if ("Cp".equalsIgnoreCase(tipo))
            this.setSaldo(150);
        System.out.println("Conta aberta com sucesso.");
    }

    public void fecharConta() {
        if (this.getSaldo() > 0)
            System.out.println("Não é possível fechar sua conta, verifique seu saldo.");
        else if (getSaldo() < 0)
            System.out.println("Conta em débito");
        else {
            this.setStatus(false);
            System.out.println("Conta fechada com sucesso");
        }
    }

    public void depositar(float valor) {
        if (this.isStatus()) {
            this.setSaldo(this.getSaldo() + valor);
            System.out.println("Depósito realizado com sucesso na conta de " + this.getDono());
        } else
            System.out.println("Impossível depositar, está conta não está aberta.");
    }

    public void sacar(float valor) {
        if (this.isStatus()) {
            if (this.getSaldo() >= valor)
                this.setSaldo(this.getSaldo() - valor);
            else
                System.out.println("Saldo insuficiente.");
        } else
            System.out.println("Impossível sacar, esta conta está fechada.");
    }

    public void pagarMensal() {
        float valorMensalidade = 0;
        if ("Cc".equalsIgnoreCase(this.getTipo()))
            valorMensalidade = 12;
        if ("Cp".equalsIgnoreCase(this.getTipo()))
            valorMensalidade = 20;
        if (this.isStatus()) {
            if (this.getSaldo() >= valorMensalidade)
                this.setSaldo(this.getSaldo() - valorMensalidade);
            else
                System.out.println("Saldo insuficiente.");
        } else
            System.out.println("Impossível pagar. Conta fechada.");
    }

    public String toString() {
        return ("----------------------------"
                + "\nNum conta: " + this.getNumConta()
                + "\nTipo: " + this.getTipo()
                + "\nDono: " + this.getDono()
                + "\nSaldo: " + this.getSaldo()
                + "\nStatus: " + this.isStatus());
    }

}
