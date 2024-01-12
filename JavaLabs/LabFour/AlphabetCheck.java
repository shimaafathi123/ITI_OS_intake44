package st;

public class AlphabetCheck {
    public static void main(String[] args) {
        String inputString1 = "HelloWorld"; 
        String inputString2 = "Hello123";   

        System.out.println("String 1 contains only alphabets: " + containsOnlyAlphabets(inputString1));
        System.out.println("String 2 contains only alphabets: " + containsOnlyAlphabets(inputString2));
    }

    private static boolean containsOnlyAlphabets(String input) {
        for (char ch : input.toCharArray()) {
            if (!Character.isLetter(ch)) {
                return false; 
            }
        }
        return true;
    }
}
