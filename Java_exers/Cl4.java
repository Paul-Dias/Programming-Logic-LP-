/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package cl4;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class Cl4 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //VAR
        String opera = null;
        int num1; 
        int num2;
        int resp1,resp2,resp3,resp4;
        
        //Perguntando:
        System.out.print("Digite um numero inteiro :");
        num1=sc.nextInt();
        System.out.print("Digite um numero inteiro :");
        num2=sc.nextInt();
        System.out.print("Digite a operação (+,-,*,/)");
       //Resolvendo
       switch (opera)
       {
           case "+":
           {
           resp1 =num1 + num2 ;
           break;
           }
           case "-":
           {
           resp2=num1 - num2;
           break;
           }
           case "*":
           {
           resp3=num1 * num2;
           break;
           }
           case "/":
           {
           resp4=num1 / num2;
           break;
           }
       }
    }
}
