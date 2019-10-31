import java.util.Scanner;
public class exerD {
	public static void main(String[] args) {
		double x=0,r,i=0;
		int t=0;
		Scanner in = new Scanner(System.in);
		System.out.println("Digite o Tamanho do Recapeamento");
		r=in.nextDouble();
		while(i<r) {
			i=i+3.75;
			t++;
		}
		System.out.println("Irá Demorar "+t+" mês(es) para ser Termidado o Recapeamento");
	}
}
