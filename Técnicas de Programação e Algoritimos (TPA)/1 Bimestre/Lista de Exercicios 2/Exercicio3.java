import java.util.Scanner;
public class Exercicio3 {
	public static void main(String [] args) {
		Scanner ler=new Scanner(System.in);
		double m,km;
		System.out.println("Digite o valor em metros");
		m=ler.nextDouble();
		km=m/1000;
		System.out.println(km+"Km");
		
	}
}
