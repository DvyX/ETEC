import java.util.Scanner;
public class SalarioC {
	public static void main(String args[]){
		double s,r;
		Scanner ler=new Scanner(System.in);
		System.out.println("Digite o Salario");
		s=ler.nextDouble();
		r=s/100*30;
		System.out.println("Voc� poder� contrair "+r+"R$ de d�vidas por m�s.");
		
	}

}
