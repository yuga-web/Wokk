#include<stdio.h>
#include<conio.h>
int main()
{
char ch;
int age;
clrscr();
do
{
printf("\n Enter the age of a person\n");
scanf("%d",&age);
if(age>=18)
{
printf("The person is eligible for vote");
}
else
{
printf("The person is not eligible for vote");
}
printf("\nDo you want to continue\n");
ch=getche();
}while(ch=='y'||ch=='Y');
getch();
return 0;
}