#include<stdio.h>
#include<conio.h>
int main()
{
int n,p[2][2],k[2][2],i,j,r[2][2];
clrscr();
printf("Enter the count  for matrices(3*3):\n");
scanf("%d",&n);
printf("Enter the elements of Matrix1:\n");
	for (i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
		scanf("%d",&k[i][j]);
		}
	}
printf("Enter the elements of Matrix2:\n");
	for (i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
		scanf("%d",&r[i][j]);
		}
	}
printf("The matrix 1 is:\n");

	for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
		printf("\t%d",k[i][j]);
		}
		printf("\n");
	}
printf("The matrix 2:\n");
	for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
		printf("\t%d",r[i][j]);
		}
		printf("\n");
	}
for(i=0;i<2;i++)
{
for(j=0;j<2;j++)
{
p[i][j]=k[i][j]+r[i][j];
}
}
printf("The addition of Two Matrices:\n");
for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
		printf("\t%d",p[i][j]);
		}
		printf("\n");
	}
getch();
return 0;
}