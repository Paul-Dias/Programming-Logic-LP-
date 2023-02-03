/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ex3;
import java.util.Scanner;
/**
 *
 * @author Paulo
 */
public class Ex3 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        
        //VAR
        String sex;
        double salm = 0,salf = 0,media_F = 0,media_M = 0,sal;
        int contp = 1,contf = 0,contm = 0;
        
        //Solving...

        while(contp <= 2)
        {  
            System.out.println("Digíte seu Sexo: "); /*responda "m" ou "f" */
            sex= sc.nextLine();            
            
            System.out.print("Digíte seu Salario: ");
            sal=sc.nextDouble();   
            contp = contp + 1;
            
            if(sex.equals("m"))
            {
                contm=contm + 1;
                salm = sal + salm;
                media_M=salm/contm;                              
            }
            else
            {
                contf=contf + 1;
                salf = sal + salf;
                media_F=salf/contf;  
            }
        System.out.println("Média do salário dos homens:"+media_M+".");            
        System.out.println("Média do salário das mulheres:"+media_F+"."); 
        }
       
    }
    
}
