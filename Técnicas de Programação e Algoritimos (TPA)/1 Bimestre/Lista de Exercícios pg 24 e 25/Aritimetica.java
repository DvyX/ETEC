import java.util.Scanner;
public class Aritimetica {
	public static void main(String args[]){
		double n1,n2,n3,n4,r;
		Scanner ler=new Scanner(System.in);
		System.out.println("Digite o primeiro valor");
		n1=ler.nextDouble();
		System.out.println("Digite o segundo valor");
		n2=ler.nextDouble();
		System.out.println("Digite o terceiro valor");
		n3=ler.nextDouble();
		System.out.println("Digite o quarto valor");
		n4=ler.nextDouble();
		r=(n1+n2+n3+n4)/4;
		System.out.println(r+" é a média aritimética.");
		
	}
	
}
