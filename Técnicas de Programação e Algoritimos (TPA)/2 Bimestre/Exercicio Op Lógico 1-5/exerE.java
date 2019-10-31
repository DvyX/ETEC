import java.util.Scanner;
public class exerE {
	public static void main(String[]args) {
		Scanner ler = new Scanner(System.in);
		double vop,da,m1,j,m2,vp,vp2;
		System.out.println("Digite o Valor da Prestação: ");
		vop = ler.nextDouble();
		System.out.println("Digite o Número de Dias de Atraso da Prestação: ");
		da = ler.nextDouble();
		m1 = (vop*2)/100;
		j = (da*0.01)/100;
		if(da>45) {
			vp = vop+m1+j;
			m2 = vp*2/100;
			vp2 = vp+m2;
			System.out.println("Valor atualizado da prestação: "+vp2);
		}else {
			vp = vop+m1+j;
			System.out.println("Valor atualizado da prestação: "+vp);
			
		}
		
	}
	
}

