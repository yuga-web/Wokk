#include<stdio.h>
#include<conio.h>
int main()
{
int digit,reverse=0;
int num;
clrscr();
printf("Enter the number\n");
scanf("%d",&num);
	while(num!=0)
	{
	digit=num%10;
	num=num/10;
	reverse=reverse*10+digit;
	}
printf("\n the reverse is %d ",reverse);
getch();
return 0;
}