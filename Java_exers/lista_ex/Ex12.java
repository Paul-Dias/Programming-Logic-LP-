/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package slk12;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class Slk12 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner (System.in);
        //VAR
        float num;
        //Infos
        System.out.print("Digíte um número: ");
        num=sc.nextFloat();
        //Resolvendo...
        if(num >20 && num<90)
        {
           System.out.print("O número "+num+"está entre 20 e 90."); 
        }
    }
}
