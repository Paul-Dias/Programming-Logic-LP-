/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package slk14;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class Slk14 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //VAR
        String nome ;
        float pr1,pr2;
        float notaf;
        //infos
        System.out.print("Digíte seu nome: ");
        nome=sc.nextLine();
        System.out.print("Digíte sua nota (1): ");
        pr1=sc.nextFloat();
        System.out.print("Digíte sua nota (2): ");
        pr2=sc.nextFloat();
        //resolvendo
        notaf = ((pr1 + pr2)/2);
        
        if(notaf>7)
        {
           System.out.println("Nome: "+nome+"."); 
           System.out.println("Nota 1: "+pr1+"."); 
           System.out.println("Nota 2: "+pr2+"."); 
           System.out.println("Média: "+notaf+".");  
           System.out.println("AP"); 
        }
        else
        {
          if(notaf<3)
        {
           System.out.println("Nome: "+nome+"."); 
           System.out.println("Nota 1: "+pr1+"."); 
           System.out.println("Nota 2:"+pr2+"."); 
           System.out.println("Média: "+notaf+".");  
           System.out.println("RP"); 
           
        }
        else
        {
          
                System.out.println("Nome: "+nome+"."); 
                System.out.println("Nota 1: "+pr1+"."); 
                System.out.println("Nota 2: "+pr2+"."); 
                System.out.println("Média: "+notaf+".");  
                System.out.println("PF"); 
                
        }
        }   
    }
}
