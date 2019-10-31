import java.util.Scanner;
public class exerB {
	public static void main(String[] args) {
		
		int r,x,i;
		Scanner ler = new Scanner(System.in);
		i=1;
		r=1;
		System.out.println("Digite o número desejado");
		x = ler.nextInt();
		while(i<=x) {
			r=r*i;
			i++;
		}
		System.out.println("O resultado será: "+r);
	}
}
