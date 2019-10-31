import java.util.Scanner;
public class exerF {
	public static void main(String[]args) {
		Scanner ler = new Scanner(System.in);
		int n,n1,n2,i,n3;
		i = 1;
		n1 = 1;
		n2 = 1;
		n3 = 1;
		n = ler.nextInt();
		while (i <= n) {
			if(n2 <2){
				System.out.println(n1);
				System.out.println(n2);
				i = i+2;
			}
			n2 = n1+n3;
			System.out.println(n2);
			n3 = n1;
			n1 = n2;
			i++;
		}
	}
} 