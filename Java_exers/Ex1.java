/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ex1;
import java.util.Scanner;
/**
 *
 * @author Paulo
 */
public class Ex1 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner (System.in);
        
        //VAR
        int num;
        
        //solving...
        
        for(num=1;num<=100;num++)
        {
            if(num%2==0)
            {
                System.out.println("Número: "+num+".");    
            }
        }
        
    }
    
}
