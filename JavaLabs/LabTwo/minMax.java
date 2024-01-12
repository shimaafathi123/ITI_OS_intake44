import java.util.Random;
class minMax{

	public static void main(String args[]){
        long startTime = System.nanoTime();

		Random rd = new Random();
		int arr[]= new int[1000];
		
		for(int i=0;i<1000; i++){
			arr[i]=rd.nextInt(1000);
	}
		int min=arr[0], max=arr[0];
		for(int i=0;i<1000; i++){
			if(arr[i]<min){
				min=arr[i];
}
			if(arr[i]>max){
				max=arr[i];
}
		
	}
        long endTime= System.nanoTime();
	long allTime=endTime-startTime;

System.out.println("Max element equal: "+max);

System.out.println("Min element equal: "+min);

System.out.println("Time for searching :"+ allTime);
}
}
