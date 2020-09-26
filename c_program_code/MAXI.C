#include<stdio.h>
#include<conio.h>
int max(int,int);
int main()
{
int x,y,greatest;
clrscr();
printf("Enter the number:\n");
scanf("%d%d",&x,&y);
greatest=max(x,y);
printf("Tne maximum is %d",greatest);
getch();
return 0;
}
int max(int a,int b)
{
if(a>b)
return a;
else
return b;
}