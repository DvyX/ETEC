import java.util.Scanner;
public class exer4_2 {
	public static void main(String[]args) {
		Scanner in = new Scanner(System.in);
		double d,s,vs,vr,vb,xb,xs,xr,fb,fr,fs,r,lr,yr,tt;
		int b,a;
		b=0;
		r=0;
		lr=0;
		System.out.println("Digite a quantidade de alunos");
		a=in.nextInt();
		System.out.println("Digite o preço do quilo do bolo");
		vb=in.nextDouble();
		System.out.println("Digite o preço do refrigerante");
		vr=in.nextInt();
		System.out.println("Digite o preço do cento do salgado");
		vs=in.nextDouble();
		xb=a%10;
		if (xb!=0) {
			b = a/10;
			b++;
		}else {
			b = a/10;
		}
		fb = b*vb;
		System.out.println("Serão necessários "+b+" bolos");
		System.out.println("Valor Final dos Bolos: R$ "+fb);
		lr=a*0.600;
		xr=lr/2;
		yr=lr%2;
		int qr = (int) xr;
		fr = xr*vr;
		System.out.println("Garrafas de Refri: "+xr);
		System.out.println("Valor Final dos Refrigerantes: R$ "+fr);
		s=a*12;
		xs=s%100;
		if(xs!=0) {
			s=s/100;
			s++;
		}else {
			s=s/100;
		}
		fs=s*vs;
		System.out.printf("Centenas de Salgados: %.0f %n", (s));
		System.out.println("Valor Final dos Salgados: R$ "+fs);
		tt = fs+fb+fr;
		System.out.println("Valor Final: R$ "+tt);
	}

}