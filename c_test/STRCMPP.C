#include<stdio.h>
#include<conio.h>
int main()
{
char aj1[100], aj2[100];
    int compare;
    clrscr();
    printf("\n\nEnter 1st string: ");
    fgets(aj1, sizeof(aj1), stdin);

    printf("\n\nEnter 2nd string: ");
    fgets(aj2, sizeof(aj2), stdin);

    compare = stringCompare(aj1, aj2);

    if(compare == 1)
	printf("\n\nBoth the strings are exactly same.\n\n");
     else
	printf("\n\nBoth the strings are different.\n");

    getch();
    return 0;
}

int stringCompare(char mj1[], char mj2[]) 
{
    int i = 0, flag = 0;
    while(mj1[i] != '\0' && mj2[i] != '\0')
    {
	
	if(mj1[i] != mj2[i])
	{
	    flag = 1;
	    break;
	}
	i++;
    }

    if(flag == 0 && mj1[i] == '\0' && mj2[i] == '\0')
	return 1;
    else
	return 0;
}