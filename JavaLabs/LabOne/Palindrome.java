class Palindrome{
   public static void main(String args[]){
	String s= args[0];
	String a="";
	for(int i=s.length()-1; i>=0; i--){
		a+=s.charAt(i);
}
   if (a.equals(s)) {
            System.out.println(s + " is a palindrome.");
        } else {
            System.out.println(s + " is not a palindrome.");
        }

}
}