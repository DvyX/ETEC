import java.util.Scanner;
public class ExerA {
	public static void main (String[]args) {
		double s,mas=0,mes=0,sm,maxs=0;
		int m;
		Scanner in=new Scanner (System.in);
		for (m=1;m<=12;m++) {
			System.out.println("Digite o sal�rio do "+m+"� m�s");
			s=in.nextDouble();
			if(m==1) {
				mes=s;
			}
			else if (s>=mas) {
				mas=s;
			}else if (s<=mes) {
				mes=s;
			}
			maxs=maxs+s;
		}
		sm=maxs/12;
		System.out.println("O Menor Sal�rio Foi R$"+mes);
		System.out.println("O Maior Sal�rio Foi R$"+mas);
		System.out.println("A Somat�ria dos Rendimetos Foi R$"+maxs);
		System.out.println("A M�dia do Sal�rio foi R$"+sm);
	}
}
