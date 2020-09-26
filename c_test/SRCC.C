
#include <stdio.h>
#include<conio.h>
int main(void) 
{ 
    // We can append this code to any C program 
    // such that it prints its source code. 
  
    char c;
    FILE *fp = fopen(__FILE__, "r");
     clrscr();
    do
    {
	c = fgetc(fp);
	putchar(c);
    }
    while (c != EOF);

    fclose(fp);
    getch();
    return 0;
}