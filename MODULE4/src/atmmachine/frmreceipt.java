
package atmmachine;

import java.sql.*;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author maaz gheewale
 */
public class frmreceipt extends javax.swing.JFrame {
Statement st;
ResultSet rs;
DBConnection db=new DBConnection();
String acc="";
    /** Creates new form frmreceipt */
    public frmreceipt(String x) {
        initComponents();
        acc=x;
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        jLabel1 = new javax.swing.JLabel();
        lblbankname = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        lbldate = new javax.swing.JLabel();
        jLabel5 = new javax.swing.JLabel();
        lblname = new javax.swing.JLabel();
        jLabel7 = new javax.swing.JLabel();
        lblaccno = new javax.swing.JLabel();
        jLabel9 = new javax.swing.JLabel();
        lblwit = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.DISPOSE_ON_CLOSE);
        addWindowListener(new java.awt.event.WindowAdapter() {
            public void windowOpened(java.awt.event.WindowEvent evt) {
                formWindowOpened(evt);
            }
        });

        jPanel1.setBackground(new java.awt.Color(255, 255, 204));
        jPanel1.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));
        jPanel1.setName("jPanel1"); // NOI18N
        jPanel1.setLayout(null);

        jLabel1.setFont(new java.awt.Font("Times New Roman", 1, 18)); // NOI18N
        jLabel1.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        jLabel1.setText("Bank Name ");
        jLabel1.setName("jLabel1"); // NOI18N
        jPanel1.add(jLabel1);
        jLabel1.setBounds(110, 20, 110, 22);

        lblbankname.setFont(new java.awt.Font("Broadway", 1, 24)); // NOI18N
        lblbankname.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblbankname.setText(".");
        lblbankname.setName("lblbankname"); // NOI18N
        jPanel1.add(lblbankname);
        lblbankname.setBounds(50, 50, 220, 50);

        jLabel3.setFont(new java.awt.Font("Times New Roman", 1, 14));
        jLabel3.setText("Date :");
        jLabel3.setName("jLabel3"); // NOI18N
        jPanel1.add(jLabel3);
        jLabel3.setBounds(20, 110, 80, 17);

        lbldate.setFont(new java.awt.Font("Times New Roman", 1, 14));
        lbldate.setText(".");
        lbldate.setName("lbldate"); // NOI18N
        jPanel1.add(lbldate);
        lbldate.setBounds(120, 110, 180, 17);

        jLabel5.setFont(new java.awt.Font("Times New Roman", 1, 14));
        jLabel5.setText("Type :");
        jLabel5.setName("jLabel5"); // NOI18N
        jPanel1.add(jLabel5);
        jLabel5.setBounds(20, 140, 44, 17);

        lblname.setFont(new java.awt.Font("Times New Roman", 1, 14));
        lblname.setText(".");
        lblname.setName("lblname"); // NOI18N
        jPanel1.add(lblname);
        lblname.setBounds(120, 140, 181, 17);

        jLabel7.setFont(new java.awt.Font("Times New Roman", 1, 14));
        jLabel7.setText("Account No :");
        jLabel7.setName("jLabel7"); // NOI18N
        jPanel1.add(jLabel7);
        jLabel7.setBounds(20, 170, 90, 17);

        lblaccno.setFont(new java.awt.Font("Times New Roman", 1, 14));
        lblaccno.setText(".");
        lblaccno.setName("lblaccno"); // NOI18N
        jPanel1.add(lblaccno);
        lblaccno.setBounds(120, 170, 181, 17);

        jLabel9.setFont(new java.awt.Font("Times New Roman", 1, 14));
        jLabel9.setText("Withdraw :");
        jLabel9.setName("jLabel9"); // NOI18N
        jPanel1.add(jLabel9);
        jLabel9.setBounds(20, 200, 69, 17);

        lblwit.setFont(new java.awt.Font("Times New Roman", 1, 14));
        lblwit.setText(".");
        lblwit.setName("lblwit"); // NOI18N
        jPanel1.add(lblwit);
        lblwit.setBounds(120, 200, 181, 17);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, 380, Short.MAX_VALUE)
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, 249, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void formWindowOpened(java.awt.event.WindowEvent evt) {//GEN-FIRST:event_formWindowOpened
        // TODO add your handling code here:
        this.setBounds(920, 370, 400, 330);
        st=db.DBC();
        try {
            String bc="";
            rs=st.executeQuery("select bcode from tbltransaction where accno='"+acc+"' ");
            if(rs.next()){
                bc=rs.getString(1);
                ResultSet rs3=st.executeQuery("select bankname from tblbank where bcode='"+bc+"' ");
                rs3.next();
                String bn=rs3.getString(1);
                ResultSet rs1=st.executeQuery("select MAX(slno) from tbltransaction where bcode='"+bc+"'");
                if(rs1.next()){
                  int mx=rs1.getInt(1);
                  System.out.print(mx);
                  ResultSet  rs2=st.executeQuery("select dtdate,discp,accno,debit,bal from tbltransaction where accno='"+acc+"' and slno="+mx+" ");
                  if(rs2.next()){ 
                    lblbankname.setText(bn);
                    lbldate.setText(rs2.getString("dtdate"));
                    lblname.setText(rs2.getString("discp"));
                    lblaccno.setText(rs2.getString("accno"));
                    lblwit.setText(rs2.getString("debit"));
                }
                }
            }
        } catch (SQLException ex) {
            Logger.getLogger(frmreceipt.class.getName()).log(Level.SEVERE, null, ex);
        }
    }//GEN-LAST:event_formWindowOpened

    public static void main(String args[]) {
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new frmreceipt("").setVisible(true);
            }
        });
    }
    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JLabel jLabel9;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JLabel lblaccno;
    private javax.swing.JLabel lblbankname;
    private javax.swing.JLabel lbldate;
    private javax.swing.JLabel lblname;
    private javax.swing.JLabel lblwit;
    // End of variables declaration//GEN-END:variables
}
