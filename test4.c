
#include<stdio.h>

int main(){

    int n, q;
    scanf(" %d %d",&n,&q);
    getchar();//buffer clear

    char Book[n],Booka[n];
    /*
    for(int i = 0; i < n;i++){
        scanf("%c",Book[i]);
    }
    */

    scanf("%s",&Book);

    int section[q][2];

    for(int i = 0; i < q; i++){
        scanf("%d %d",&section[i][0],&section[i][1]);
    }

    int l,r;
    int a,b,c,d,i,k=r,y=0;
    for(int v = 0; v < q; v++){
        l = section[v][0];
        r = section[v][1];
         for(a=l-1;a<r;a++)
         {
          i=1;
          for(b=a+1;b<r;b++)
          {
           if(Book[a]==Book[b])
           {
            i++;
            for(c=b+1;c<r;c++)
            {
             Book[c-1]=Book[c];
            }
            r--;
           }
          }
          Booka[a]=i;
          y=r;
         }
         printf("%c 갯수는 %d\n",Book[d],Booka[d]);
    }


    return 0;
}

/*
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
*/