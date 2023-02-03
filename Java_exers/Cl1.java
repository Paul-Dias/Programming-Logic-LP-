/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package cl1;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class Cl1 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //var
            int numero=5;
        //Perguntando
            switch(numero){
                
            case 1:
            {   
                System.out.print("vc digitou 1");
                break;
            }
            case 2:
            {   
                System.out.print("vc digitou 2");
                break;
            }
            default:
            {
                System.out.print("Valor invalido");   
            }
            }
    }
}

