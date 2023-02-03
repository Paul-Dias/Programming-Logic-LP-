/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 
 * File:   main.cpp
 * Author: ppaul
 *
 * Created on 3 de Setembro de 2021, 15:16
 */

#include <stdio.h>
int menor (int vet[5] )
{
    int x,a ;
    a=vet[0];
     for(x=1; x<5;x++){
     if(vet[x]<a){
        a=vet[x];
     }
     }

    return a;

}

int main ()
{
    int num, i ;
    int vet[5] ;
        for (i = 0 ; i < 5 ; i++)
        {
            scanf ("%d", &vet[i]) ;
        }
    printf("O menor é \n");
    printf ("%d", menor(vet)) ;

    return 0 ;
}
