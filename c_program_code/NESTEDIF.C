#include<stdio.h>
#include<conio.h>
int main()
{
 long int x,y,z;
clrscr();
printf("\n Enter the three numbers\n ");
scanf("\n%ld \n%ld \n%ld",&x,&y,&z);
		if(x>y)
		{
			if(x>z)
			{
			printf("\n X is the largest value %ld",x);
			}
			else
			{
			printf("\n Z is the largest value %ld",z);
			}
		}
		else
		{
			if(y>z)
			{
			printf("\n Y is the largest value %ld",y);
			}
			else
			{
			printf("\n Z is the largest value %ld",z);
			}

		}
getch();
return 0;
}
