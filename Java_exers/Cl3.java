/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package cl3;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class Cl3 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //VAR
        int ida;
        //Perguntando
        System.out.print("Digite sua idade :");
        ida=sc.nextInt();
        //resolvendo
        switch(ida)
        {
            case 1 :
            case 2 :
            case 3 :
            case 4 :
            case 5 :
            case 6 :
            case 7 :
            case 8 :
            {
               System.out.print("pré mirim");
               break;  
            }
            case 9 :
            {
               System.out.print(" mirim 1");
               break;  
            }
            case 10 :
            {
               System.out.print(" mirim 2");
               break;  
            }
            case 11 :
            {
               System.out.print(" petriz 1");
               break;  
            }
            case 12 :
            {
               System.out.print(" petriz 2");
               break;  
            }
            case 13 :
            {
               System.out.print(" infantil 1");
               break;  
            }
               case 14 :
            {
               System.out.print(" infantil 2");
               break;  
            }
             case 15:
            {
               System.out.print(" juvenil 1");
               break;  
            }
             case 16 :
            {
               System.out.print(" juvenil 2");
               break;  
            }
                 case 17 :
            {
               System.out.print(" junior 1");
               break;  
            }
            case 18:
            case 19:
            {
               System.out.print(" junior 2");
               break;  
            }
     
        }
    }
}
