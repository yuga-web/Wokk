#include<stdio.h>
#include<conio.h>
int main()
{
int f=1,i,num;
clrscr();
printf("Enter the number for Factorial\n");
scanf("%d",&num);
	for(i=1;i<=num;i++)
	{
	f=f*i;
	}
printf("The factorial of %d is %d",num,f);
getch();
return 0;
}
