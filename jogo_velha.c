#include <stdio.h>
#include <stdlib.h>



int d6 =0;
int d15 =0;
int d6d15=0;
int x=0;
for ( int j=1 ; j <= 13000 ; j++ ) {
    if(j % 6 ==0)d6++;
    if(j % 15 ==0)d15++;
    if(j % 6 ==0 && j % 15 ==0)d6d15++;

   x=d6 + d15 - d6d15;
}

printf("%d",x);