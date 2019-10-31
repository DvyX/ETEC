import java.util.Scanner;
public class exerC {
	public static void main(String[]args) {
	Scanner ler=new Scanner(System.in);
	double r,c,x;
	System.out.println("Digite a quantidade de dinheiro em Reais que será levado para a viagem");
	r=ler.nextDouble();
	System.out.println("Selecione o seu tipo de viagem: 1-Nacional 2-Europeia 3-Norte Americana 4-Sul Americana");
	x=ler.nextDouble();
	if (x==1) {
		System.out.println("R$"+r);
	} else if (x==2) {
		c=r/4.39;
		System.out.println("€"+c);
	} else if (x==3) {
		c=r/3.92;
		System.out.println("$"+c);
	} else if(x==4) {
		c=r*11.32;
		System.out.println("$"+c);
	} else {
		System.out.println("ERROR 404");
	}
	
	}
	
}
