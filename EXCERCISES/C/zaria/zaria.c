#include <stdio.h>
int main () {
    int z1A , z2A , z1B , z2B ; 
    int sumA , sumB ; 

    printf("paiktisA: \n") ; 
    printf("give z1: ") ; 
    scanf("%d" , &z1A) ;
    if (z1A<1 || z1A>6) {
        printf("please choose a number between 1-6") ; 
        scanf("%d", &z1A) ; 
    }
    printf("give z2: ") ; 
    scanf("%d" , &z2A) ;
    if (z2A<1 || z2A>6) { 
        printf("please choose a number between 1-6") ; 
        scanf("%d", &z2A) ; 
    } 
    sumA=z1A+z2A ; 

    printf("give z1: ") ; 
    scanf("%d" , &z1B) ;
    if (z1B<1 || z1B>6) {
        printf("please choose a number between 1-6") ; 
        scanf("%d", &z1B) ; 
    } 
    printf("give z2: ") ; 
    scanf("%d" , &z2B) ;
    if (z2B<1 || z2B>6) { 
        printf("please choose a number between 1-6") ; 
        scanf("%d", &z2B) ; 
    }
    sumA=z1B+z2B ; 

    if (sumA<sumB) {
        printf("!winner is player B!") ; 
    }
    else {
        if (sumB<sumA) {
                printf("!winner is player A!") ;
        }
        else {
                printf("!we have a tie!") ; 
        }
    }
return 0 ;
}