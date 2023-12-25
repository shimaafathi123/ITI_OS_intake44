#include<bits/stdc++.h>
using namespace std;
int binarySearch(int *arr, int x, int high, int low);
int main(){
    int arr[]={1,2,3,4,5,6,7};
    int x=8;
    int size = sizeof(arr)/sizeof(arr[0]);
    int low =0;
    int high=size-1;
    int result= binarySearch(arr, x, high, low);
    if(result!=-1){
            cout<<"Element found in:"<<" "<<result;
    }
    else{
        cout<<"Element not found";
    }


}
int binarySearch(int arr[], int x, int high, int low){
    while(low<=high){
    int mid = (low+high)/2;

    if(arr[mid]==x)
        return mid;

     if(arr[mid]>x)
        high=mid-1;

    else
        low =  mid+1;





    }
        return -1;

}
