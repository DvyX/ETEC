import java.util.Scanner;

public class Soma {
	
	public static void main (String[]args) {
	
		double n1,n2,r;
		Scanner ler = new Scanner(System.in);
		System.out.println("Digite um valor: ");
		n1 = ler.nextDouble();
		System.out.println("Digite outro valor: ");
		n2 = ler.nextDouble();
		r = n1+n2;
		System.out.println("A soma é: "+r);
		
	}
}
