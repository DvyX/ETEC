import java.util.Scanner;
public class Prestacao {
	public static void main(String args[]) {
		double v,tx,tp,p;
		Scanner ler=new Scanner(System.in);
		System.out.println("Digite o valor original da presta��o");
		v=ler.nextDouble();
		System.out.println("Digite a taxa de juros");
		tx=ler.nextDouble();
		System.out.println("Digite o tempo em dias que a presta��o esta atrasada");
		tp=ler.nextDouble();
		p=v+(v*(tx/100)*tp);
		System.out.println("Sua presta��o ap�s o vencimento ser� de "+p+"R$");
	
	}
}
