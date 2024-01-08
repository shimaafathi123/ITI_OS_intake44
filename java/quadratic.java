Package op;
import java.util.Scanner;

public class Quadratic {
    public static void calRoot() {

	Double root1=0.0, root2=0.0;
        Scanner myObj = new Scanner(System.in);

        System.out.println("Enter a ");
        Double a = myObj.nextDouble();
        System.out.println("Enter b ");
        Double b = myObj.nextDouble();
        System.out.println("Enter c ");
        Double c = myObj.nextDouble();

         Double d = b * b - 4 * a * c;

            if (d < 0) {
                System.out.println("No Roots");
            }
	else{
		root1= (-b+Math.sqrt(d))/(2*a);
		root2= (-b-Math.sqrt(d))/(2*a);
		System.out.println("Root1: "+root1);
		System.out.println("Root2: "+root2);
}

}
}
