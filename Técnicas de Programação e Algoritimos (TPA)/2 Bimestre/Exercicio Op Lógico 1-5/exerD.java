import java.util.Scanner;
public class exerD {
	public static void main(String[]args) {
		
		Scanner ler = new Scanner(System.in);
		double s,sb,a,t,as;
		System.out.println("Digite o S�lario: ");
		sb = ler.nextDouble();
		System.out.println("Voc� vai querer vender suas f�rias? Se sim, Digite 1, Caso Contr�rio, Digite qualquer outro n�mero");
		t = ler.nextDouble();
		if(t==1) {
			a = (sb*30)/100;
			as = sb/3;
			s = sb+as+a;
			System.out.println("Sal�rio: R$"+s);
		}else {
			as = sb/3;
			s = sb+as;
			System.out.println("Sal�rio: R$"+s);
			
		}
		
	}
	
}