#include<stdio.h>

int main(){
    int i;
    int points[12];
    double avg = 0;
    for(i = 0; i < 12; i++){
        scanf("%d",&points[i]);
    }

    int count = 10;
    int temp = 0;
    for(int i = 0; i < count ; i++){
        for (int j = 0; j < count-1 +i; j++){
            if(points[j] > points[j+1]){
                temp = points[j];
                points[j] = points[j+1];
                points[j+1] = temp;
            }
        }
    }

    for(int i = 1 ; i < 11; i++){
        avg += points[i];
    }

    avg = avg/count;


    printf("%.1lf\n",avg);
    return 0;
}