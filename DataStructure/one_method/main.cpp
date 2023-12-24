#include<bits/stdc++.h>
using namespace std;

void oneMethod(int arr[], int size, bool flag) {
    int indx;

    for (int i = 0; i < size - 1; i++) {
        indx = i;
        for (int j = i + 1; j < size; j++) {
            if ((flag && arr[j] < arr[indx]) ||
                (!flag && arr[j] > arr[indx])) {
                indx = j;
            }
        }
        swap(arr[indx], arr[i]);
    }
}

int main() {
    int size;
    cout << "Enter Size of Array" << endl;
    cin >> size;
    int arr[size];

    for (int i = 0; i < size; i++) {
        cin >> arr[i];
    }

    cout << "Array Before sorted" << endl;
    for (int i = 0; i < size; i++) {
        cout << arr[i] << " ";
    }
    cout << endl;

    oneMethod(arr, size, true);

    cout << "Array After ascending sorted" << endl;
    for (int i = 0; i < size; i++) {
        cout << arr[i] << " ";
    }
    cout << endl;
    oneMethod(arr, size, false);

    cout << "Array After descending sorted" << endl;
    for (int i = 0; i < size; i++) {
        cout << arr[i] << " ";
    }

    return 0;
}
