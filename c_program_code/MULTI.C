#include<stdio.h>
#include<conio.h>
int main()
{
int test[4][5][3],i,j,k;
clrscr();
printf("Enter the 12 values:\n");
for(i=0;i<4;i++)
{
	for(j=0;j<5;j++)
	{
		for(k=0;k<3;k++)
		{
		scanf("%d",&test[i][j][k]);
		}
	}
}
printf("The Values are:\n");
for(i=0;i<4;i++)
{
	for(j=0;j<5;j++)
	{
		for(k=0;k<3;k++)
		{
		printf("Test[%d][%d][%d]=%d",i,j,k,test[i][j][k]);
		printf("\n");
		}
	}
}
getch();
return 0;
}
