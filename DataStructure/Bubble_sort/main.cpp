#include <bits/stdc++.h>

using namespace std;

int main()
{
    int size;
    cout<<"Enter Size of Array"<<endl;
    cin>>size;
    int arr[size];


    for(int i=0; i<size; i++){
        cin>>arr[i];
    }
    cout<<"Array Before sorted"<<endl;
        for(int i=0; i<size; i++){
        cout<<arr[i]<<" ";
    }
    cout<<endl;
    for(int i=0; i<size-1; i++){
        for(int j=0; j<size-i-1; j++)
            if (arr[j]>arr[j+1]){
                swap(arr[j],arr[j+1]);
            }
        }

    cout<<"Array After sorted"<<endl;

    for(int i=0; i<size; i++){
        cout<<arr[i]<<" ";
    }
    return 0;
}
