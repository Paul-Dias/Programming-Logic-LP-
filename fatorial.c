
#include <stdio.h>
#include <conio.h>
#include <string.h>
int main()
{
   int num,i, fat=1;
   
   printf("Digite um número e veja o fatorial: \n");
   scanf("%d",&num);
   
    for(i=num;i>1;i--)
    {
       fat=fat*i; //  fat*=i;
    }
  
  
      printf("Fatorial de %d é: %d",num, fat);

    return 0;
    getch();
}
