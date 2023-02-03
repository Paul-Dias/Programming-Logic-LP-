/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package slk8;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class Slk8 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in); 
        //VAR
        float num1,num2;
        float result;
        //Infos
        System.out.print("Digíte um número: ");
        num1=sc.nextInt();
        System.out.print("Digíte um número: ");
        num2=sc.nextInt();
        //Resolvendo
        result= num1+num2;
        //
        if(result>10)
        {
          System.out.print("Este número "+result+" é maior que 10.");  
        }

    }
}
