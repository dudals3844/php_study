#include<stdio.h>

int main(){
    int total_num;

    while(1){
        scanf("%d",&total_num);
        if(total_num <= 1000){
            break;
        }
    }

    int member_num_array[total_num];

    for(int i = 0; i < total_num; i++){
        scanf("%d", &member_num_array[i]);
    }

    int temp;
    for(int i = 0 ; i < total_num; i++){
        for (int j = 0 ; j < total_num - 1 -i; j++){
            if(member_num_array[j] > member_num_array[j+1]){
                temp = member_num_array[j];
                member_num_array[j] = member_num_array[j+1];
                member_num_array[j+1] = temp;
            }
        }
    }

    for(int i = 0 ; i < total_num; i++){
        for (int j = 0 ; j < total_num - 1 -i; j++){
            if(member_num_array[j] == member_num_array[j+1]){
                for(int k = j+1; k < total_num; k++){
                    if(member_num_array[k] == member_num_array[j]){//기준 숫자와 같은 숫자를 찾아서 다 0으로 만든다.
                        member_num_array[k] = 0;
                    }
                }
                member_num_array[j] = 0;//기준 숫자를 0으로 만든다.
            }
        }
    }

    for (int i =0 ; i < total_num; i ++){
        if(member_num_array[i] != 0){
            printf("%d ",member_num_array[i]);
        }
    }
    return 0;
}