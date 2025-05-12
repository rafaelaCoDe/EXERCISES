#include <stdio.h>
int main{
int x , y ,z ,telestis  ;
printf("give number1:") ; 
scanf("%d", &x) ; 
printf("give number2:") ; 
scanf("%d", &y) ;
printf("choose z:\n0 for (+)\n1 for (-)\n2 for (*)\n3 for (/)\n4 for (%%)") ; 
printf("choice:") ; 
scanf("%d", &telestis) ;
if (telestis==0) {
    z=x+y ;
    printf("%d + %d = %d", x,y,z);
}
else if (telestis==1) {
    z=x-y ;
    printf("%d - %d = %d", x,y,z);
}
else if (telestis==2) {
    z=x*y ;
    printf("%d * %d = %d", x,y,z);
}
else if (telestis==3) {
    z=x/y ;
    printf("%d / %d = %d", x,y,z);
}
else if (telestis==4) {
    z=x%y ;
    printf("%d % %d = %d", x,y,z);
} 
return 0 ;
} 