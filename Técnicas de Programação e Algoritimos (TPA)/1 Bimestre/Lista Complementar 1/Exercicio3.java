import java.util.Scanner;
public class Exercicio3 {
	public static void main (String args[]) {
		Scanner ler=new Scanner(System.in);
		double d,real,r;
		System.out.println("Digite o valor em dólares a ser convertido");
		real=ler.nextDouble();
		d=real*4;
		System.out.println("O valor convertido é de "+d+"R$");
		
	}

}
