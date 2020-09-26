#include<stdio.h>
#include<conio.h>
void main()
{
int x,y,z;
float a;
clrscr();
printf("enter the first num\n");
scanf("%d",&x);
printf("enter the second num\n");
scanf("%d",&y);
printf("enter the third num\n");
scanf("%d",&z);
a=(x+y+z)/3.0;
printf("the avg of three num is %f",a);
getch();
}