/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package pkgfor;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class For {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args)
    {
        // TODO code application logic here
        Scanner sc= new Scanner(System.in);
        //Variaveis
        int x,y,z;
        //Solicitando ao usuário
        System.out.print("Digíte um número: ");
        x = sc.nextInt();
        //codigo
        for(y=1;y<=10;y++) 
        {          
           z=x*y; 
           System.out.println("O valor é: "+x+"x"+y+"="+z+".");
        }    
    }
}
