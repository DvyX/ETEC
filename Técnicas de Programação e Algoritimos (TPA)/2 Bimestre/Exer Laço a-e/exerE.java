import java.util.Scanner;
public class exerE {
	public static void main(String[] args) {
		int y=0,x,z=0,i=2;
		Scanner in = new Scanner(System.in);
		System.out.println("Digite o Número");
		x=in.nextInt();
		while(i<x-1) {
			y=x%i;
			if(y==0) {
				z=z+1;
			}
			i++;
		}
		if(z==0) {
			System.out.println("É um Número Primo!");
		}else {
			System.out.println("Não é um Número Primo!");
		}
	}
}
