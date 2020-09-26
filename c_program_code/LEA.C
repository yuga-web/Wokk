 #include<stdio.h>
 #include<conio.h>
 int main()
 {
 int k;
 char ch;
 clrscr();
 do
 {
 printf("Enter the year\n");
 scanf("%d",&k);
 if(k%4==0)
 {
 printf("This is leap year:%d\n",k);
 }
 else
 {
 printf("This is not leap year:%d\n",k);
 }
 printf("Do you want to continue\n");
 ch=getch();
 }while(ch=='y'||ch=='Y');
 getch();
 return 0;
 }