#include<bits/stdc++.h>
using namespace std;
void linearSearchById(int *arr,int n, int salary);
int main(){


    int n;
    cout<<"Enter the number of employees"<<endl;
    cin>>n;
    int arr[n];
    linearSearchById(arr,n,10000);
}

void linearSearchById(int *arr,int n, int salary){

        cout<<"Enter the employees names"<<endl;

        for(int i=0; i<n; i++){
            cin>>arr[i];
        }
        for(int i=0; i<n; i++){
            if (arr[i]==salary){
                cout<<salary<<" found in index "<<i<<endl;
            }

        }
}
