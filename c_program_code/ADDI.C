#include<stdio.h>
#include<conio.h>
int main()
{
int a,b,i;
printf("Enter the two limits\n");
scanf("%d%d",&a,&b);
for(i=a;i<b;i++)
{
int s=2;
while(s<i/2)
{
if(i%s==0)
printf("It is not a prime no",i);
else
s++;
}
printf("It is a prime no",i);
}
getch();
return 0;
}