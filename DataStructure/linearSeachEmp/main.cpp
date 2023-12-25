#include<bits/stdc++.h>
using namespace std;
void linearSearchByName(string *arr,int n, string name);
int main(){


    int n;
    cout<<"Enter the number of employees"<<endl;
    cin>>n;
    string arr[n];
    linearSearchByName(arr,n,"ali");
}

void linearSearchByName(string *arr,int n, string name){

        cout<<"Enter the employees names"<<endl;

        for(int i=0; i<n; i++){
            cin>>arr[i];
        }
        for(int i=0; i<n; i++){
            if (arr[i]==name){
                cout<<name<<" found in index "<<i<<endl;
            }
        }
}
