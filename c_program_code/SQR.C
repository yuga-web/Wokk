#include<stdio.h>
#include<conio.h>
#include<math.h>
int main()
{
int k;
double x;
char ch;
clrscr();
aa:printf("\nEnter the number to find square root:\n");
scanf("%d",&k);
x=sqrt(k);
printf("The square root of %d is %d\n",k,x);
printf("Do you want to continue:\n");
ch=getche();
switch(ch)
{
case'Y':
case'y':
printf("\nOKAY");
goto aa;
case'n':
printf("\nEXIT");
default:
printf("\nGOING TO EXIT");
}
getch();
return 0;
}


