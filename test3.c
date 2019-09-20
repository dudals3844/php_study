#include<stdio.h>
int main(){

    int N,M;

    scanf("%d %d",&N,&M);

    //printf("%d %d",N,M);
    int getButton_address[N][2][2];

    for(int i = 0 ; i < N; i++){
        scanf("%d %d %d %d",&getButton_address[i][0][0],&getButton_address[i][0][1],&getButton_address[i][1][0],&getButton_address[i][1][1]);

    }

    int getclick_address[M][2];
    for(int i = 0 ; i < M ; i++){
        scanf("%d %d",&getclick_address[i][0],&getclick_address[i][1]);
    }

    int click_num[N];
    for(int i = 0; i < N; i++){
        click_num[i] = 0;
    }
    int x_1,x_2,y_1,y_2;
    for(int i = 0; i < M; i++){
        for(int j = N-1; j >= 0; j--){
            x_1 = getButton_address[j][0][0];
            x_2 = getButton_address[j][0][1];
            y_1 = getButton_address[j][1][0];
            y_2 = getButton_address[j][1][1];
            if(x_1 <= getclick_address[i][0] && getclick_address[i][0] <= x_2){
                if(y_1 <= getclick_address[i][1] && getclick_address[i][1] <= y_2){
                    click_num[j]++;
                    break;
                }


                //click_num[j]++;
                //break;
            }
        }
    }

    for(int i = 0; i < N; i++){
        printf("Button_#%d: %d\n",i+1,click_num[i]);
    }
    return 0;
}