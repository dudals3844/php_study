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

    for(int i = N-1; i >= 0; i--){
        for(int j = 0; j < M; j++){
            if((getButton_address[i][0][0] <= getclick_address[j][0] <= getButton_address[i][0][1]) && (getButton_address[i][1][0] <= getclick_address[j][1] <= getButton_address[i][1][1])){
                click_num[i]++;
            }
        }
    }

    printf("%d",getButton_address[0][0][0]);
    printf("%d",getclick_address[0][0]);
    return 0;
}