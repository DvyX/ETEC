import java.util.Scanner;
public class Exercicio2 {
	public static void main (String args[]) {
		Scanner ler=new Scanner(System.in);
		double r,km,l;
		System.out.println("Digite os quil�metros percorridos");
		km=ler.nextDouble();
		System.out.println("Digite a quantidade de combust�vel");
		l=ler.nextDouble();
		r=km/l;
		System.out.println("Foi gasto "+r+" de litro de combust�vel por quil�metros percorridos.");
		
	}

}
