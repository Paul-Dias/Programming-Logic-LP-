/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package slk5;
import java.util.Scanner;
/**
 *
 * @author Paulo
 */
public class Slk5 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //VAR
        int num;
        //Infos
        System.out.print("Digíte um número inteiro:");
        num=sc.nextInt();
        //Resolvendo...
        if((num%2==0) && (num>0))
        {
           System.out.print("Esse número é Par e é positivo."); 
        }
        else
        {           
            if((num%2==0) && (num<0)) 
            {
                    System.out.print("Esse número é par e negativo.");
            }
            else
            {
                if((num%3==0) && (num<0)) 
                {    
                    System.out.print("Esse número é ímpar e negativo.");
                }
                else
                {
                    if((num%3==0) && (num>0))
                    {
                       System.out.print("Esse número é ímpar e positivo.");
                    }
                }
            }               
        }       
    }   
}
