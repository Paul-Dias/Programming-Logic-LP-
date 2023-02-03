/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package for1.pkg3;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class For13 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //Variáveis
        int x,pos = 1,i,ant = 1;
        //Solicitando ao usuário
        System.out.print("Digite um número: ");
        x=sc.nextInt();
        //resolvendo
        for(i=3;i<=x;i++)
        {
            pos=ant+pos;
            ant=pos-ant;
            System.out.println(ant);
        }
    }
}
