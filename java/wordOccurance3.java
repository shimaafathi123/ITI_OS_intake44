import java.util.StringTokenizer;

class wordOccurrance3 {
    public static void main(String[] args) {
        String s = "Hello Shimaa ,Hello Abdelrahman Hello ,Ali Hello Aliaa ?Hello";
        String wordToCount = "Hello";
        String del = " ,! # $ % & ' ( ) * + , - . : ; ? @ [ ] ^ _ ` { | } ~";
        StringTokenizer tokenizer = new StringTokenizer(s,del);

        int count = 0;
        while (tokenizer.hasMoreTokens()) {
            String token = tokenizer.nextToken();
            if (wordToCount.equals(token)) {
                count++;
            }
        }

        System.out.println("Occurrences of '" + wordToCount + "': " + count);
    }
}
