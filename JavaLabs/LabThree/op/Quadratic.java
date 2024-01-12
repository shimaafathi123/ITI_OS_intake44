package op;

import java.util.List;
import java.util.function.Function;

public class QuadraticFunction implements Function<List<Double>, Double> {

    @Override
    public Double apply(List<Double> coefficients) {
        double a = coefficients.get(0);
        double b = coefficients.get(1);
        double c = coefficients.get(2);

        double discriminant = b * b - 4 * a * c;

        if (discriminant < 0) {
            System.out.println("No real roots.");
            return null;
        } else {
            double root1 = (-b + Math.sqrt(discriminant)) / (2 * a);
            double root2 = (-b - Math.sqrt(discriminant)) / (2 * a);
            System.out.println("Root 1: " + root1);
            System.out.println("Root 2: " + root2);
            return root1; // Change this according to your needs
        }
    }
}
public class Quadratic {

    public static QuadraticFunction calRoot() {
        return new QuadraticFunction();
    }

    public static void printRoots(Double result) {
        if (result != null) {
            System.out.println("Roots: " + result);
        }
    }
}