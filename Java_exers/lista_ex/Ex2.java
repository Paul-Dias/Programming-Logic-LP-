/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package slk2;
import java.util.Scanner;
/**
 *
 * @author PCLab01_02
 */
public class Slk2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //VAR
        float m,p,e;
        //Infos
        System.out.print("Digíte o peso dos peixes: ");
        p=sc.nextFloat();
        //Solving...
        if(p>50)
        {
         e=p-50;
         m=e*4;
         {
             System.out.print("A multa é de"+m+"R$5.");
         }
        }
        else
        {
            {
                e=0;
                m=0;
            }
            System.out.println("Você não será multado.Excesso="+e+" ,Multa:"+m+"R$.");
        }
    }
    
}
