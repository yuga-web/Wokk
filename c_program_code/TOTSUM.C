#include<stdio.h>
#include<conio.h>
int main()
{
int num,digit,sum=0;
clrscr();
printf("Enter the number\n");
scanf("%d",&num);
		while(num!=0)
		{
		digit=num%10;
		sum=sum+digit;
		num=num/10;
		}
printf("\n The total sum of the given number is  %d",sum);
getch();
return 0;
}