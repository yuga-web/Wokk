#include<stdio.h>
#include<conio.h>
#include<string.h>
int main()
{
 char temp[50],str1[50],str2[50];
clrscr();
printf("\nEnter the First Name\n");
gets(str1);
printf("\nEnter the Second Name\n");
gets(str2);
printf("\n The name before swapping are\n %s %s",str1,str2);
strcpy(temp,str1);
strcpy(str1,str2);
strcpy(str2,temp);
printf("\n The name after swapping are\n %s %s",str1,str2);
getch();
return 0;
}
