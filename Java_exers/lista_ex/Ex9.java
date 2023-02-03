/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package slk9;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class Slk9 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //VAR
        float num;
        //Infos
        System.out.print("Digíte um número: ");
        num=sc.nextFloat();
        //resolvendo
        if(num%5==0)
        {
            System.out.print("Esse número é divisível por 5");
        }
        else
        {
            System.out.print("Esse número não é divisível por 5");
        }
        
    }
}
