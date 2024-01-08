import java.util.Random;
import java.util.Arrays;
import java.util.Scanner;

public class binarySearch {

    public static void main(String args[]) {
        long startTime = System.nanoTime();

        Random rd = new Random();
        int arr[] = new int[1000];
        Scanner myObj = new Scanner(System.in);
        int target = myObj.nextInt();

        for (int i = 0; i < 1000; i++) {
            arr[i] = rd.nextInt(1000);
        }

        Arrays.sort(arr);

        int low = 0;
        int high = 999;
	int flag=1;
        while (low <= high) {
            int mid = (low + high) / 2;

            if (arr[mid] == target) {
                System.out.println("Found element at index: " + mid);
		flag=0;
                break;
            } else if (arr[mid] < target) {
                low = mid + 1;
            } else {
                high = mid - 1;
            }
        }

        long endTime = System.nanoTime();
        long allTime = endTime - startTime;

	if(flag==1){
		System.out.println("Element you entered NOT FOUND");
}

        System.out.println("Time for searching: " + allTime);
    }
}
