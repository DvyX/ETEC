import java.util.Scanner;
public class Prestacao {
	public static void main(String args[]) {
		double v,tx,tp,p;
		Scanner ler=new Scanner(System.in);
		System.out.println("Digite o valor original da prestação");
		v=ler.nextDouble();
		System.out.println("Digite a taxa de juros");
		tx=ler.nextDouble();
		System.out.println("Digite o tempo em dias que a prestação esta atrasada");
		tp=ler.nextDouble();
		p=v+(v*(tx/100)*tp);
		System.out.println("Sua prestação após o vencimento será de "+p+"R$");
	
	}
}
