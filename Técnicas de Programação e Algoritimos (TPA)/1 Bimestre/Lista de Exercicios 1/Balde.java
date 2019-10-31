import java.util.Scanner;
public class Balde {

	public static void main(String args[]) {
		
		int a,b,balde;
		Scanner ler = new Scanner(System.in);
		System.out.println("Digite o Valor A: ");
		a = ler.nextInt();
		System.out.println("Digite o valor B: ");
		b = ler.nextInt();
		balde = a;
		a = b;
		b = balde;
		System.out.println("A = "+a+" B = "+b);
				
		
	}
	
	
}
