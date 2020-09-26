#include<stdio.h>
#include<conio.h>
#include<string.h>
int main()
{
char ch[10];
printf("Enter the String:\n");
gets(ch);
strrev(ch);
printf("The reverse of String:\n %s",ch);
getch();
return 0;
}