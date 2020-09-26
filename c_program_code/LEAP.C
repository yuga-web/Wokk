#include<stdio.h>
#include<conio.h>
int main()
{
int m,n,i;
clrscr();
printf("Enter the Two limits\n");
scanf("%d%d",&m,&n);
for(i=m;i<n;i++)
{
if(i%4==0)
printf("The year is Leap Year:%d\n",i);
else
printf("The year is not leap year:%d\n",i);
}
getch();
return 0;
}

