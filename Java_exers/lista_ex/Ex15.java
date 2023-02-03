/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package slk15;
import java.util.Scanner;
/**
 *
 * @author Paulo
 */
public class Slk15 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //VAR
        String resp;
        //Infos
        System.out.print("Qual é o nome da capital o Brasil? :");
        resp=sc.nextLine();
        //Resolvendo
        if(resp.equals("Brasilia") || (resp.equals("BRASILIA")))
        {
          System.out.print("Parabéns !!!");  
        }
        else
        {
          {
            System.out.print("ERROU");    
          }
        }
    }
    
}
