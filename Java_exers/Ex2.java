/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ex2;
import java.util.Scanner;
/**
 *
 * @author Paulo
 */
public class Ex2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner (System.in);
        
        //VAR
        int contn = 1,cont = 0,conta = 0;
        double num = 0, soma = 0,media = 0;
        
        
       
        
        //solving...
        while(contn<=40)     
        {
            System.out.println("Digíte um número : ");
            num=sc.nextDouble();
            contn = contn + 1 ;
            if(num < 0)
            {
               cont=cont + 1;
            }
            else
            {
                conta = conta + 1;
                soma = num + soma;
                media = soma / conta;
            }                      
        }
        System.out.println("Quantidade de números negativos: "+cont+".");
        System.out.println("Soma dos números positivos: "+soma+".");
        System.out.println("Média dos números positivos: "+media+".");
    }   
}
