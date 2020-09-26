
// CPP program to demonstrate pre increment 
// operator. 
#include <stdio.h>
#include<conio.h>

int main()
{
    int x, a;
    clrscr();
    x=10;
    a = x++;

    printf( "\n Post Increment Operation");

    // Value of a will not change
    printf("\n the value of a is %d",a);

    // Value of x change after execution of a=x++;
    printf("\n the vale of x is %d" ,x);
    getch();
    return 0;
}
