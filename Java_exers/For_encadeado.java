/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package for_encadeado;
import java.util.Scanner;
/**
 *
 * @author Etec
 */
public class For_encadeado {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner sc=new Scanner(System.in);
        //Vars
        int un,de,min;
        //codigo
        for(min=0;min<=1;min++)
        
        {
            for(de=0;de<=5;de++)
            {
                for(un=0;un<=9;un++)
                {
                    
                 System.out.println(min+":"+de+un);
                 System.out.println("2:00");
                }
             }
        }    
            
    }
}
