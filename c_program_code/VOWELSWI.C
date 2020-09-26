#include<stdio.h>
#include<conio.h>
int main()
{
char alpha;
clrscr();
printf("Enter the vowel\n");
scanf("%c",&alpha);
	switch(alpha)
	{
	case 'a':
	case 'e':
	case 'i':
	case 'o':
	case 'u':
	printf("The vowel is lower case");
	break;
	case 'A':
	case 'E':
	case 'I':
	case 'O':
	case 'U':
	printf("The vowel is Upper case");
	break;
	default:
	printf("the alphabet is not a vowel");

	}
getch();
return 0;

}