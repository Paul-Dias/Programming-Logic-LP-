/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package slk11;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class Slk11 {

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
        //Resolvendo...
        if(num%2==0 && num%5==0 && num%10==0)
        {
            System.out.print("Esse número "+num+"é divisível por 2,5 e 10");
        }
        else
        {
            if(num%2==0)
            {
              System.out.print("Esse número "+num+"é divisível por 2.");  
            }
            else
            {
            if(num%5==0)
                {
                    System.out.print("Esse número "+num+"é divisível por 5.");  
                }
                else
                {
                    if(num%5==0)
                    {
                        System.out.print("Esse número "+num+"é divisível por 5.");  
                    }   
                }          
            }
        }
    }
}
