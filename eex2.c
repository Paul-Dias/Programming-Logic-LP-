/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 
 * File:   main.cpp
 * Author: ppaul
 *
 * Created on 3 de Setembro de 2021, 17:16
 */


#include <stdio.h>
#include <math.h>

int num_primo (int h){
    int divid_1, cont, res, result;

    divid_1 = h - 1;

        if ((h == 0) || (h == 1) || (h < 0)){
        result = 0;
        }
        else{
            do{
                res = h % divid_1;
                divid_1 = divid_1 -1;
            }
            while ((res != 0));

            if (divid_1 == 0){
                result = 1;
            }
            else
                result = 0;
        }

        return (result);
}


int main (){
    int  n1, n2, c, valor;
    printf("Digite um número:");
    scanf("%i", &n1);
    printf("Digite um número maior que o primeiro:");
    scanf("%i", &n2);
    while( n2<n1 || n2==n1){
            printf("Inválido\n");
        printf("Digite um número:");
        scanf("%i", &n1);
        printf("Digite um número maior que o primeiro:");
        scanf("%i", &n2);
    }
    c = n2 ;
    while( c!= n1 ){
            valor =  num_primo (c);
            if(valor==1){
                printf("%i\n",c);
                c = c-1;
            }
            else
                c = c-1;
    }
return 0;
}
    


