/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package cl2;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class Cl2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //VAR
        int n;
 
       
        //Perguntando
        System.out.print("Digite um número que corresponda a um mes do ano :");
        n =sc.nextInt();
        
        
        //
        switch(n){
                
            case 1:
            {   
                System.out.print("janeiro");
                break;
            }
            case 2:
            {   
                System.out.print("fevereiro");
                break;
            }
            case 3:
            {
                System.out.print("março");
                break;
            }
            case 4:
            {
                System.out.print("maio");   
                break;
            }
            case 5:
            {
                System.out.print("abril");   
                break;
            }
            case 6:
            {
                System.out.print("junho"); 
                break;
            }
            case 7:
            {
                System.out.print("julho"); 
                break;
            }
            case 8:
            {
                System.out.print("agosto");  
                break;
            }
            case 9:
            {
                System.out.print("setembro");  
                break;
            }
            case 10:
            {
                System.out.print("outubro");   
                break;
            }
            case 11:
            {
                System.out.print("novembro");
                break;
            }
            case 12:
            {
                System.out.print("dezembro"); 
                break;
            }
            }
    }
}
        
    

