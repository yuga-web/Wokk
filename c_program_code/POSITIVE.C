#include<stdio.h>
#include<conio.h>
int main()
{
int num;
clrscr();
printf("Enter the num");
scanf("%d",&num);
if(num>0)
{
printf("the num is positive");
}
else
{
	if(num==0)
	{
	printf("the num is zero");
	}
	else
	{
	printf("the num is negative");
	}
}
getch();
return 0;
}