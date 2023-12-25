#include<bits/stdc++.h>
using namespace std;
void linearSearchById(int *arr,int n, int id);
int main(){


    int n;
    cout<<"Enter the number of employees"<<endl;
    cin>>n;
    int arr[n];
    linearSearchById(arr,n,10);
}

void linearSearchById(int *arr,int n, int id){

        cout<<"Enter the employees names"<<endl;

        for(int i=0; i<n; i++){
            cin>>arr[i];
        }
        for(int i=0; i<n; i++){
            if (arr[i]==id){
                cout<<id<<" found in index "<<i<<endl;
            }

        }
}
