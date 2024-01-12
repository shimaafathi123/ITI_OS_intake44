package Exceot;
public class ExceptionHandler {
    public static void main(String[] args) {
        ExceptionThrower thrower = new ExceptionThrower();

        try {
            thrower.method1();
        } catch (MyCustomException e) {
            System.out.println("Caught exception in method1: " + e.getMessage());
        } finally {
            System.out.println("Finally block for method1");
        }

        try {
            thrower.method2();
        } catch (MyCustomException e) {
            System.out.println("Caught exception in method2: " + e.getMessage());
        } finally {
            System.out.println("Finally block for method2");
        }

        try {
            thrower.method3();
        } catch (MyCustomException e) {
            System.out.println("Caught exception in method3: " + e.getMessage());
        } finally {
            System.out.println("Finally block for method3");
        }
    }
}
