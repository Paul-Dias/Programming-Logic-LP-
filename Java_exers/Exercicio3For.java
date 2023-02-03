/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package exercicio.pkg3.pkgfor;
import java.util.Scanner;

/**
 *
 * @author Etec
 */
public class Exercicio3For {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        
        int contador = 1 , num1 = 1, num2 = 1, num, x, princ;
        
        System.out.print("Digite um numero de 3 a 15: ");
        num = sc.nextInt();
        
        System.out.println("0");
        System.out.println("1");
        
        princ = num - 3;
        
        for (contador = princ; contador >= 0;contador = contador - 1)
        {
            System.out.println(num1);
            x = num2;
            num2 = num1;
            num1 = num1 + x;
        }
        
    }
}
