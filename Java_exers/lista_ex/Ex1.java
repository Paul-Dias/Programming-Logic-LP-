/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package slk1;
import java.util.Scanner;
/**
 *
 * @author PCLab01_02
 */
public class Slk1 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //VAR
        int num;
        //infos...
        System.out.print("Digíte um número: ");
        num=sc.nextInt();
        //resolvendo
        if(num>20)
        {
            System.out.print("O número "+num+" é maior que 20.");
        }

    }
    
}
