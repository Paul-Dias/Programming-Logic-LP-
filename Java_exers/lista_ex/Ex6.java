/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package slk6;
import java.util.Scanner;

/**
 *
 * @author PCLab01_02
 */
public class Slk6 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //VAR
        float g1;
        //infos
        System.out.print("Digíte o índice de poluição : ");
        g1=sc.nextFloat();
        //Resolvendo...
        if((g1 >=0.30) && (g1 <0.40))
        {
            System.out.print("Suspender Atividades do grupo 1. ");
        }
        else
        {
            if((g1 >=0.40) && (g1 <0.50))
            {
                System.out.print("Suspender Atividades do grupo 1 e do grupo 2. ");
            }
            else
            {
            if(g1 >=0.50) 
            {
                System.out.print("Suspender Atividades do grupo 1 ,grupo 2 e do grupo 3. ");
            }   
            }
        }        
    }   
}
