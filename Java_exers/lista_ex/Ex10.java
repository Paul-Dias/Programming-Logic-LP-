/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package slk10;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class Slk10 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner (System.in);
        //VAR
        float num;
        //Info
        System.out.print("Digíte um número:");
        num=sc.nextFloat();
        //Resolvendo...
        if(num%3==0&num%5==0)
        {
           System.out.println("O número "+num+" é divisível por 3 e 5"); 
        }
        else
        {
           System.out.println("O número "+num+" não é divisível por 3 e 5"); 
        }
    }
}
