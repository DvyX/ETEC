import java.util.Scanner;
public class exerB {
	public static void main(String[]args) {
	Scanner ler=new Scanner(System.in);
	double d,h,b,b1,b2,v;
	System.out.println("Digite a distância");
	d=ler.nextDouble();
	System.out.println("Digite o horario");
	h=ler.nextDouble();
	System.out.println("Há bagagens? Se sim, Digite 1, caso contrário, digite qualquer outro número");
	b=ler.nextDouble();
	if (h>6 && h<20) {
		b1=d*2.71+4.50;
		if (b==1) {
			System.out.println("Digite a quantidade de bagagem");
			v=ler.nextDouble();
			b1=2.75*v+b1;
			System.out.println("R$"+b1);
		} else {
			System.out.println("R$"+b1);
		}
	} else if (h>20.01 && h<23.59 || h>00.00 && h<5.59) {
			b2=d*3.58+5.65;
			if (b==1) {
				System.out.println("Digite a quantidade de bagagem");
				v=ler.nextDouble();
				b2=2.75*v+b2;
				System.out.println("R$"+b2);
			} else {
				System.out.println("R$"+b2);
			}
		}
		
	}
	
}