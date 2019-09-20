
#include<stdio.h>

int main(){

    int n, q;
    scanf(" %d %d",&n,&q);
    getchar();//buffer clear

    char Book[n];
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
    int Alphabet[26];
    //int _a,_b,_c,_d,_e,_f,_g,_h,_i,_j,_k,_l,_m,_n,_o,_p,_q,_r,_s,_t,_u,_v,_w,_x,_y,_z;

    for(int i = 0; i < q; i++){
        l = section[i][0];
        r = section[i][1];
        //_a=0,_b=0,_c=0,_d=0,_e=0,_f=0,_g=0,_h=0,_i=0,_j=0,_k=0,_l=0,_m=0,_n=0,_o=0,_p=0,_q=0,_r=0,_s=0,_t=0,_u=0,_v=0,_w=0,_x=0,_y=0,_z=0;

        for(int d = 0; d < 26; d++){
            Alphabet[d] = 0;
        }
        for(int j = l-1 ; j < r; j++){
            switch(Book[j]){
                case 'A':
                    Alphabet[0]++;
                    break;

                case 'B':
                    Alphabet[1]++;
                    break;

                case 'C':
                    Alphabet[2]++;
                    break;

                case 'D':
                    Alphabet[3]++;
                    break;

                case 'E':
                    Alphabet[4]++;
                    break;

                case 'F':
                    Alphabet[5]++;
                    break;

                case 'G':
                    Alphabet[6]++;
                    break;

                case 'H':
                    Alphabet[7]++;
                    break;

                case 'I':
                    Alphabet[8]++;
                    break;

                case 'J':
                    Alphabet[9]++;
                    break;

                case 'K':
                    Alphabet[10]++;
                    break;

                case 'L':
                    Alphabet[11]++;
                    break;

                case 'M':
                    Alphabet[12]++;
                    break;

                case 'N':
                    Alphabet[13]++;
                    break;

                case 'O':
                    Alphabet[14]++;
                    break;

                case 'P':
                    Alphabet[15]++;
                    break;

                case 'Q':
                    Alphabet[16]++;
                    break;

                case 'R':
                    Alphabet[17]++;
                    break;

                case 'S':
                    Alphabet[18]++;
                    break;

                case 'T':
                    Alphabet[19]++;
                    break;

                case 'U':
                    Alphabet[20]++;
                    break;

                case 'V':
                    Alphabet[21]++;
                    break;

                case 'W':
                    Alphabet[22]++;
                    break;

                case 'X':
                    Alphabet[23]++;
                    break;

                case 'Y':
                    Alphabet[24]++;
                    break;

                case 'Z':
                    Alphabet[25]++;
                    break;
            }
        }
        int max = 0;
        int num = 0;
        for(int k = 0; k < 26; k++){
            if(Alphabet[k]>max){
                max = Alphabet[k];
                num = k;
            }
        }

        printf("%c\n",num+ 65);

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