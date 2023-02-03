/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package entradadados;
import java.util.Scanner; // importa a classe Scanner
/**
 *
 * @author Etec
 */
public class EntradaDados 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        //definindo o Scanner
        Scanner sc =new Scanner(System.in);
        
        // TODO code application logic here
        //definindo as variáveis 
        int idade;
        String nome;
        //solicitando o nome do usuário
        System.out.print("Digíte seu nome : ");
        nome = sc.nextLine(); //lê valores do tipo String
        //solicitando a idade do usuário
        System.out.print("Digíte sua idade : ");
        idade = sc.nextInt();
        
        //verificando se o aluno é Dimaior ou Dimenor
        if(idade < 18)
        {
             System.out.println(nome + "\n"+"Você é Dimenor");
        }
        else  
        {
             System.out.println(nome + "\n"+"Você é Dimaior");
        }    
     }
 }
            
        
