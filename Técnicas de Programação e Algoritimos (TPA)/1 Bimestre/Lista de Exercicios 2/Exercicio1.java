import java.util.Scanner;
public class Exercicio1 {
	public static void main(String [] args) {
		Scanner ler=new Scanner(System.in);
		int n1,n2,n3,r;
		System.out.println("Digite o primeiro valor");
		n1=ler.nextInt();
		System.out.println("Digite o segundo valor");
		n2=ler.nextInt();
		System.out.println("Digite o terceiro valor");
		n3=ler.nextInt();
		n1=n1*n1;
		n2=n2*n2;
		n3=n3*n3;
		r=n1+n2+n3;
		System.out.println("O resultado é "+r);
		
	}
}
