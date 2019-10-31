import java.util.Scanner;
public class Area {
	
	public static void main(String args[]){
		
		double b,h,area;
		Scanner ler = new Scanner(System.in);
		System.out.println("Digite a base: ");
		b = ler.nextDouble();
		System.out.println("Digite a altura: ");
		h = ler.nextDouble();
		area = (b+h)/2;
		System.out.println("A área é: "+area);
		
	}
}
