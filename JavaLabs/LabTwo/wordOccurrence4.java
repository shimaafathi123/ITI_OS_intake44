import java.util.regex.*;

class wordOccurrence4 {
    public static void main(String args[]) {
        String s = "Hello, Shimaa Hello Abdelrahman ,Hello Ali ?Hello Aliaa .Hello";
        String word = "Hello";
        String arr[] = s.split("\\s+|[.,;?!]");
        String regexPattern = "(?i)" + Pattern.quote(word);

        int count = 0;
        for (int i = 0; i < arr.length; i++) {
            if (arr[i].matches(regexPattern)) {
                count++;
            }
        }

        System.out.println(count);
    }
}
