#include<stdio.h>
#include<conio.h>
#include<string.h>
void swap(char*,char*);
int main()
{
char *str="hello";
char*st="World";
printf("The Strings Before Swap %c %c")
clrscr();
/*
printf("Enter the String1:\n");
gets(str);
printf("Enter the String2:\n");
gets(st);
printf("The String Before swap:\n");
puts(str);
puts(st);
swap(str,st);
printf("The String after swap:\n");
puts(str);
puts(st);
*/
getch();
return 0;
}
void swap(char*str,char*st)
{
char*temp=str;
str=st;
st=temp;
}

