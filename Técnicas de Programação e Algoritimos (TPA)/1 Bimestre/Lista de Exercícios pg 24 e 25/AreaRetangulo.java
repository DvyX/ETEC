import java.util.Scanner;
public class AreaRetangulo {
	public static void main(String args[]) {
		int l,h,a;
		Scanner ler=new Scanner(System.in);
		System.out.println("Digite a altura");
		h=ler.nextInt();
		System.out.println("Digite a largura");
		l=ler.nextInt();
		a=l*h;
		System.out.println("A �rea do ret�ngulo � de "+a);
		
	}
}