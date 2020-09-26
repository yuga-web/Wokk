#include<stdio.h>
#include<conio.h>
int main()
{
int val;
int num,digit,reverse=0;
clrscr();
printf("Enter the number\n");
scanf("%d",&num);
val=num;
	do
	{
	digit=num%10;
	num=num/10;
	reverse=reverse*10+digit;
	} while(num!=0);
      printf("\nThe number is %d",val);
	printf("\nthe reverse is %d",reverse);
		if(val==reverse)
		{
		printf("\nthe number is palindrome");
		}
		else
		{
		printf("\n The number is not a palindrome");
		}
getch();
return 0;

}