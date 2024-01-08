package mainPkg;

import op.QuadraticFunction;  // Import QuadraticFunction from the op package
import op.Quadratic;

import java.util.List;

public class mainClass {
    public static void main(String args[]) {
        QuadraticFunction quadraticFunction = Quadratic.calRoot();
        List<Double> coefficients = List.of(1.0, -3.0, 2.0);
        quadraticFunction.apply(coefficients);
    }
}
