import java.util.Scanner;
public class Exercicio5 {
	public static void main(String [] args) {
		Scanner ler=new Scanner(System.in);
		double pre,por,vd,vf;
		System.out.println("Digite o pre�o do produto");
		pre=ler.nextDouble();
		System.out.println("Digite a porcentagem de desconto");
		por=ler.nextDouble();
		vd=(pre*por)/100;
		vf=pre-vd;
		System.out.println("O valor ap�s a convers�o ser� "+vf+"R$");
	
	}
}
