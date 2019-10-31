import java.util.Scanner;
public class exerD {
	public static void main(String[]args) {
		
		Scanner ler = new Scanner(System.in);
		double s,sb,a,t,as;
		System.out.println("Digite o Sálario: ");
		sb = ler.nextDouble();
		System.out.println("Você vai querer vender suas férias? Se sim, Digite 1, Caso Contrário, Digite qualquer outro número");
		t = ler.nextDouble();
		if(t==1) {
			a = (sb*30)/100;
			as = sb/3;
			s = sb+as+a;
			System.out.println("Salário: R$"+s);
		}else {
			as = sb/3;
			s = sb+as;
			System.out.println("Salário: R$"+s);
			
		}
		
	}
	
}