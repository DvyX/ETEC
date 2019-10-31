import java.util.Scanner;
public class Dias {

	public static void main(String args[]) {
	
		double nd,m,a;
		Scanner ler = new Scanner(System.in);
		System.out.println("Digite o número de dias: ");
		nd = ler.nextDouble();
		m = nd/30;
		a = nd/365;
		System.out.println("Meses = "+m+" | Anos = "+a);
		
	}
}
