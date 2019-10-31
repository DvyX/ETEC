import java.util.Scanner;
public class Temperatura {
	public static void main(String args[]) {
		double f,c,r;
		Scanner ler=new Scanner(System.in);
		System.out.println("Digite a temperatura em graus Fahrenheit");
		f=ler.nextDouble();
		r= f-32;
		c=(r*5/9);
		System.out.println(c+"c");
//		incompleto :(
	}
	
}
