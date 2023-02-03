#include <stdio.h>
#include <conio.h>
#include <string.h>
int main()
{
   
      int A,B,tot;
        int op; 
    printf("Calculadora \n");
     printf("Qual operação deseja ?\n");
    printf("Soma(1)\n");
     printf("Subtração(2)\n");
      printf("Divisão(3)\n");
       printf("Multiplicação(4)\n");
       
    scanf("%d",&op);
    
    printf("Operação escolhida: %d \n", op);
    
    printf("Digite o 1° num: \n");
    scanf("%d",&A);
     
    printf("Digite o 2° num: \n");
    scanf("%d",&B);
    
    if(op== 1)
    {
    tot=A+B;
    }else
        if(op == 2)
        {
            tot=A-B;
        }else
        if(op== 3)
        {
            tot=A/B;
        }
        else  
        {
            tot=A*B;
        }
       
     printf("Resultado: %d",tot);

    return 0;
    getch();
}