
// CPP program to demonstrate pre increment 
// operator. 
#include <stdio.h>
#include<conio.h>

int main()
{
    int x, a;
    clrscr();
    x=10;
    a = ++x;
    printf("\n Pre Increment Operation");

    // Value of a will change
    printf("\n the value of a is %d",a);

    // Value of x change before execution of a=++x;
   printf("\n the value of x is %d", x);
   getch();
    return 0; 
} 
