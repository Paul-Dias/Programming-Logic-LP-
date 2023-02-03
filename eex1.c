/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 
 * File:   main.cpp
 * Author: ppaul
 *
 * Created on 3 de Setembro de 2021, 11:16
 */

#include<stdio.h>
int funcao (int num)
{
    int i, resultado = 0 ;
     for (i = 2; i <= num / 2; i++) 
     {
       if (num % i == 0)
       {
       resultado++ ;
       break;
       }
     }
        if (resultado == 0)
            return 1 ;
        else
            return 0 ;
 return 0;
}

int main()
{
    int num, imprime = 0 ;
    scanf("%d", &num) ;
    imprime = funcao(num) ;
    printf ("%d", imprime) ;
    return 0 ;
}
    

