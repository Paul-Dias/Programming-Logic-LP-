/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package slk4;
import java.util.Scanner;
/**
 *
 * @author Paulo
 */
public class Slk4 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner (System.in);
        //VAR
        float num1,num2,num3,num4,q1,q2,q3,q4;
        //Infos
        System.out.print("Digíte um número: ");
        num1=sc.nextFloat();
        System.out.print("Digíte um número: ");
        num2=sc.nextFloat();
        System.out.print("Digíte um número: ");
        num3=sc.nextFloat();
        System.out.print("Digíte um número: ");
        num4=sc.nextFloat();
        //Resolvendo...
        q1=num1*num1;
        q2=num2*num2;
        q3=num3*num3;       
        q4=num4*num4;
        if(q3>=1000)
        {
            System.out.println("O quadrado de "+num1+" é "+q1+".");
            System.out.println("O quadrado de "+num2+" é "+q2+".");
            System.out.println("O quadrado de "+num3+" é "+q3+".");
        }
        else
        {
            System.out.println("O quadrado de "+num1+" é "+q1+".");
            System.out.println("O quadrado de "+num2+" é "+q2+".");
            System.out.println("O quadrado de "+num3+" é "+q3+".");  
            System.out.println("O quadrado de "+num4+" é "+q4+".");
        }
    }
    
}
