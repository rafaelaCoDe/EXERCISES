#include <stdio.h>
#include <stdlib.h>

int main() {
    int n1 , n2 , i , c=0 , maxtries , minvalue , maxvalue , l=1 ; 
    char name1[20] , name2[20] ; 
        do {
            printf("\n\n\nHello and welcome to my game!!!\n\n") ; 
            printf("I will need 2 brave , and maybe lucky ,competitors!\n\nThe first one will be : ") ;
            fgets(name1 , 20 , stdin) ; 
            printf("\nand the second one will be : ") ;
            fgets(name2 , 20 , stdin) ; 
            printf("%s will pick a number and %s will try to guess it.\n\n" , name1 , name2 ) ; 
            do {
                printf ("First,%s will set the number of tries %s will have to guess the number : " , name1 , name2 ) ;
                scanf("%d" , &maxtries) ; 
                if (maxtries<1)
                    printf("number of tries must be at least 1!") ; 
            }while(maxtries<1) ;
            printf("MAX TRIES : %d\n" , maxtries) ;
            do{
                printf("Now,%s will declare the price range for %s : \nMINIMUM VALUE : " , name2 , name1 ) ; 
                scanf("%d" , &minvalue) ; 
                printf("MAXIMUM VALUE : ") ;
                scanf("%d" , &maxvalue) ;
                if(!(minvalue < maxvalue))
                    printf("!minimum value must be LESS than maximum value!") ; 
            }while(minvalue < maxvalue) ; 
            printf("\nPRICE RAGNGE : %d - %d\n" , minvalue , maxvalue) ; 

            system ("pause") ;

            do {
            printf("\n %s please dont look at he screen for a second, its time for %s to pick a number between %d-%d : " ,name2 , name1 , minvalue , maxvalue) ; 
            scanf("%d" , &n1) ;
            if (n1<minvalue || n1>maxvalue) {
                printf("\n!your number must be between %d and %d!\n" , minvalue , maxvalue) ;
            }
            }while( n1<minvalue || n1>maxvalue ) ;
            system("cls") ;

            printf("\n %s now its your time!\nPRICE RANGE : %d-%d\ntries given : %d\n\n",name2 , minvalue , maxvalue , maxtries) ;
            do {
                printf("please make a guess about the number %s chose :" , name1 ) ;
                scanf("%d" , &n2) ;
                if (n2<=maxvalue && n2>=minvalue) {
                c+=1 ; 
                    if (n2==n1) {
                        printf("\n\nYou found the number\n!!!CONGRATULATIONS!!!\ntotal tries: %d\n\n" , c) ;
                    } 
                    else{
                        if (n2>n1) {
                            printf("The GIVEN number is SMALLER than YOUR number\ntry number: %d\n\n" , c) ;
                        }
                        else {
                            printf("The GIVEN number is BIGGER than YOUR number\ntry number: %d\n\n" , c) ;
                        }
                    } 
                }    
                else {
                    printf("\n!you have to pick a number within the PRICE RANGE!\n") ; 
                }
            }while(n2!=n1 && c<maxtries) ;
            if (c==maxtries && n2!=n1) {
                printf("unfortunately you didnt make it\ndo you want to try again?\ntype : \n1 to play again\n0 to exit\nchoice :  ") ;
            }
            else {
                printf("do you want to try again ?\ntype : \n1 to play again\n0 to exit\nchoice :  ") ;
            }  
            scanf("%d" , &l) ;
            system("cls") ;
        }while(l == 1) ;
    printf("GOODBYE\n") ; 
    system("pause") ; 
    return 0 ;
}