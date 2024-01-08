import java.util.Scanner;
import java.util.Arrays;

class WordOccurrence {
    public static void main(String args[]) {
        String s = "Hello, Shimaa Hello Abdelrahman ,Hello Ali ?Hello Aliaa .Hello";
        String word = "Hello";
        String arr[] = s.split("\\s+|[.,;?!]");

        int count = 0;
        for (int i = 0; i < arr.length; i++) {
            if (word.equals(arr[i])) {
                count++;
            }
        }

        System.out.println(count);
    }
}
