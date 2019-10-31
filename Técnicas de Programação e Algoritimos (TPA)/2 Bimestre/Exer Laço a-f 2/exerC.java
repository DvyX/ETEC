import java.util.Scanner;
public class exerC {
	public static void main(String[] args) {
		int i,e,b,r,x;
		i=1;
		Scanner in = new Scanner(System.in);
		System.out.println("Digite a Base");
		b=in.nextInt();
		System.out.println("Digite o Expoente");
		e=in.nextInt();
		r=b;
		while (i<e) {
			r=r*b;
			i++;
		}
		System.out.println("O resultade será: "+r);
	}

}
