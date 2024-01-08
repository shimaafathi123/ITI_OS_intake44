import java.util.function.Function;

public class tmp{
	public static void main(String args[]){
		Function<Double,Double> Fahrenheit= Centigrade->(Centigrade*9/5)+32;

		System.out.println("The temprature in Fahrenheit is : "+ Fahrenheit.apply(22.5));

		
	


}



}