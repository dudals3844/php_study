#include<stdio.h>

void main()
{
 int a,b,c,d,i,k=10,l=0;
 char buf[10],bufa[10];
 scanf("%s",&buf);
 for(a=0;a<k;a++)
 {
  i=1;
  for(b=a+1;b<k;b++)
  {
   if(buf[a]==buf[b])
   {
    i++;
    for(c=b+1;c<k;c++)
    {
     buf[c-1]=buf[c];
    }
    k--;
   }
  }
  bufa[a]=i;
  l=k;
 }
 for(d=0;d<l;d++)
 {
  printf("%c 갯수는 %d\n",buf[d],bufa[d]);
 }
}