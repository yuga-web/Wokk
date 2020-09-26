#include<stdio.h>
#include<conio.h>
int main()
{
int n,d,rev=0;
clrscr();
printf("Enter the number");
scanf("%d",&n);
while(n!=0)
{

d=n%10;
rev=(rev*10)+d;
n=n/10;
}
printf("The reverse is %d",rev);
getch();
return 0;
}