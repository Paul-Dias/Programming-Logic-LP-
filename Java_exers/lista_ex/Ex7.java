/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package slk7;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class Slk7 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //VAR
        int idade;
        //Info
        System.out.print("Digíte sua idade: ");
        idade=sc.nextInt();
        //Resolvendo...
        if((idade>=5) && (idade <=7))
        {
            System.out.print("Você pertence a categoria Infantil A .");
        }
        else
        {
        if((idade>=8) && (idade <=11))
            {
                System.out.print("Você pertence a categoria Infantil B .");
            }
            else
            {
                if((idade>=12) && (idade <=13))
               {
                   System.out.print("Você pertence a categoria Juvenil A .");
               }
               else
                {
                    if((idade>=14) && (idade <=17))
                    {
                        System.out.print("Você pertence a categoria Juvenil B .");
                    }
                    else
                    {
                        System.out.print("Você pertence a categoria  Adulto .");
                    }
                }
            }           
         }    
     }
 }
