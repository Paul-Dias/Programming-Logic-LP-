/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package slk17;
import java.util.Scanner;
/**
 *
 * @author PCLab01_02
 */
public class Slk17 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //VAR
        float div,deviden;
        //Infos
        System.out.print("Digíte o divisor: ");
        div=sc.nextFloat();
        System.out.print("Digíte o dividendo: ");
        deviden=sc.nextFloat();
        //Resolvendo...
        if(deviden%div==0)
        {
            System.out.print("O coeficiente  é inteiro: ");
        }
        else
        {
            System.out.print("O coeficiente NÃO é inteiro: ");
        }
    }
    
}
