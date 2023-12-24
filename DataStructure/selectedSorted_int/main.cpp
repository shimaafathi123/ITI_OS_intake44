#include <bits/stdc++.h>
using namespace std;

int main() {
    int size;
    cout << "Enter Size of Array" << endl;
    cin >> size;
    int arr[size];

    int minIndex;

    for (int i = 0; i < size; i++) {
        cin >> arr[i];
    }
    cout << "Array Before sorted" << endl;
    for (int i = 0; i < size; i++) {
        cout << arr[i] << " ";
    }
    cout << endl;
    for (int i = 0; i < size - 1; i++) {
        minIndex = i;
        for (int j = i + 1; j < size; j++) {
            if (arr[j] < arr[minIndex]) {
                minIndex = j;
            }
        }
        swap(arr[minIndex], arr[i]);
    }

    cout << "Array After sorted" << endl;

    for (int i = 0; i < size; i++) {
        cout << arr[i] << " ";
    }
    return 0;
}
