/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package for1.pkg2;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class For12 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc= new Scanner(System.in);
        //Variaveis
        int x,i,soma=0;
        //Solicitando ao usuário
        System.out.print("Digite um número: ");
        x=sc.nextInt();
        //Solving...
        for(i=x;i>=1;i--)
        {
           soma=i+soma; 
           System.out.println("O resultado dessa soma é: "+soma+".");
        }
    }
}
