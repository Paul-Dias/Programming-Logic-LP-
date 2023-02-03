/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package slk13;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class Slk13 {

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
        if(num>20)
        {
            System.out.print("Esse número é maior que 20");
        }
        else
        {
            if(num==20)
            {
              System.out.print("Esse número é igual a 20");  
            }
            else
            {
            if(num<20)
                {
                    System.out.print("Esse número é menor que 20");  
                }
          
            }
        }
    }
}