package Aula05;

public class OlaMundoJava extends javax.swing.JFrame {
    public OlaMundoJava() {
        initComponents();
    }

    @SuppressWarnings("unchecked")
    private void initComponents() {
        lblMensagem = new javax.swing.JLabel();
        btnClick = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        lblMensagem.setFont(new java.awt.Font("Lucida Grande", 0, 24));
        lblMensagem.setForeground(new java.awt.Color(255, 0, 0));
        lblMensagem.setText("Aqui vai aparecer a Mensagem");

        btnClick.setFont(new java.awt.Font("Lucida Grande", 0, 18));
        btnClick.setText("Clique em Mim!");
        btnClick.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnClickActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
                layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                        .addGroup(layout.createSequentialGroup()
                                .addGap(41, 41, 41)
                                .addComponent(lblMensagem)
                                .addContainerGap(49, Short.MAX_VALUE))
                        .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                .addComponent(btnClick)
                                .addGap(130, 130, 130)));
        layout.setVerticalGroup(
                layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                        .addGroup(layout.createSequentialGroup()
                                .addGap(42, 42, 42)
                                .addComponent(lblMensagem)
                                .addGap(33, 33, 33)
                                .addComponent(btnClick, javax.swing.GroupLayout.PREFERRED_SIZE, 48,
                                        javax.swing.GroupLayout.DEFAULT_SIZE)
                                .addContainerGap(33, Short.MAX_VALUE)));

        pack();
    }

    private void btnClickActionPerformed(java.awt.event.ActionEvent evt) {
        lblMensagem.setText("Olá, Mundo");
    }

    public static void main(String[] args) {

        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new OlaMundoJava().setVisible(true);
            }
        });
    }

    private javax.swing.JButton btnClick;
    private javax.swing.JLabel lblMensagem;
}
