/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package slk16;
import java.util.Scanner;
/**
 *
 * @author PCLab01_02
 */
public class Slk16 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //VAR
        float num1,num2;
        //Infos
        System.out.print("Digíte um número :");
        num1=sc.nextFloat();
        System.out.print("Digíte outro número :");
        num2=sc.nextFloat();
        //Resolvendo...
        if(num1%num2 ==0)
        {
           System.out.print("O 1° número é divisível pelo 2° número."); 
        }
        else
        {
           System.out.print("O 1° número NÃO é divisível pelo 2° número.");  
        }
        
        
    }   
}
