import java.util.Scanner;
public class exer4 {
	public static void main(String[]args) {
		Scanner in = new Scanner(System.in);
		double r,a,d,s,b,vs,vr,vb,xb,xs,xr,vt;
		System.out.println("Digite a quantidade de alunos");
		a=in.nextDouble();
		System.out.println("Digite o preço do quilo do bolo");
		vb=in.nextDouble();
		System.out.println("Digite o preço do refrigerante 2L");
		vr=in.nextDouble();
		System.out.println("Digite o preço do cento do salgado");
		vs=in.nextDouble();
		b=a/10;
		xb=b%10;
		if (xb!=0) {
			b++;
		}
		vb=b*vb;
		
		r=(a*0.600)/2;
		vr=r*vr;
		
		s=a*12;
		xs=s%12;
		if (xs!=0) {
			s++;
		}
		vs=(s*vs)/100;
		
		int qb = (int) b;
		int qr = (int) r;
		int qs = (int) s;
		
		System.out.println("Será necessário R$"+vb+" para comprar "+qb+" quilos de bolo");
		System.out.println("Será necessário R$"+vr+" para comprar "+qr+" refrigerantes");
		System.out.println("Será necessário R$"+vs+" para comprar "+qs+" salgados");
		vt=vb+vr+vs;
		System.out.println("Será necessário levar R$"+vt+" para comprar todos os itens");
	}

}
