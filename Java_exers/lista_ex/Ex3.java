/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package slk3;
import java.util.Scanner;
/**
 *
 * @author Paulo
 */
public class Slk3 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //VAR
        int c;
        float n;
        float salario,salario1,st,e;
        //Infos

        System.out.print("Digíte seu código:");
        c=sc.nextInt();
        System.out.print("Informe seu período de trabalho: ");
        n=sc.nextFloat();
        //Resolvendo...
        if(n>50)
        {
            e=n-50;
            salario=e*20;
            salario1=n*10;
            st=salario+salario1;
            {
                System.out.println("Seu código é :"+c+".");
                System.out.println("O salário total é: "+st+"R$.");
                System.out.println("O Excedente foi de : "+salario+"R$.");
            }
        }
        else
        {
            salario1=n*10;
            System.out.println("Seu código é :"+c+".");
            System.out.println("Não houve excedente,o salário total é de :"+salario1+"R$.");

        }
    }
    
}
