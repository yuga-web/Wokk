#include<stdio.h>
#include<conio.h>
int primeno(int);
int main()
{
//char ch;
int i,prime,s,q;
clrscr();
printf("Enter the limit\n");
scanf("%d %d",&s,&q);
for(i=s;i<=q;i++)
{
prime=primeno(i);
if(prime==1)
printf("\nIt is a prime number: %d",i);
else
continue;
//printf("\nIt is not a prime number:%d",i);
}
getch();
return 0;
}

int primeno(int a)
{
int t=2;
while(t<a/2)
{
  if(a%t==0)
  return 0;
  else
  t++;
  }
  return 1;
}